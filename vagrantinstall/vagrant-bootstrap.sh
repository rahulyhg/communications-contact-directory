#!/usr/bin/env bash
################################################################################
# Main shell script for enhancing a base vagrant box.  I've broken out each area
# into what I think is logical so we can turn on or off any components.
################################################################################


# Simple callable functions ####################################################
# Add an apt repo
function addrepo {
    echo 'Adding Repository' $1
    shift
    apt-add-repository -y install "$@" >/dev/null 2>&1
}

# Install using apt-get
function inst {
    echo 'Installing' $1
    shift
    # apt-get -y install "$@" >/dev/null 2>&1
    apt-get -y install "$@"
}
################################################################################

echo "Bootstrap.sh initialized."

# System updates ###############################################################
# Drop in ppa's here before the apt-get update later
sudo add-apt-repository ppa:ondrej/php

# Ubuntu/Debian system update
echo System Update with apt-get
apt-get -y update >/dev/null 2>&1
apt-get -y upgrade >/dev/null 2>&1

# Build essentials are required for some things like Redis
inst 'Build Essentials Development Tools' build-essential

# Install make
inst 'Make' make
################################################################################


# Miscellaneous apps and requirements ##########################################
# Install NodeJs
inst 'NodeJS' nodejs

# Install the Node Package Manager
inst 'Node Package Manager' npm

# install With Bower, Grunt, and Gulp here
npm install -g bower
npm install -g grunt
npm install -g gulp
################################################################################


# Git setup ####################################################################
# Install Git
inst 'Git' git
################################################################################


# Web server installs ##########################################################
# Install Nginx
inst 'Nginx' nginx

# overwrite the nginx default server configuration for the vagrant app
sudo cat > /etc/nginx/sites-available/default <<'EOF'
server {
  server_name localhost;
  root /vagrant/project/public;
  sendfile off;

  gzip_static on;
  location = /favicon.ico {
    log_not_found off;
    access_log off;
  }

  location = /robots.txt {
    allow all;
    log_not_found off;
    access_log off;
  }

  location ~* \.(txt|log)$ {
    allow 192.168.0.0/16;
    deny all;
  }

  location ~ \..*/.*\.php$ {
    return 403;
  }

  location ~ ^/sites/.*/private/ {
    return 403;
  }

  location ~ (^|/)\. {
    return 403;
  }

  location / {
    try_files $uri @rewrite;
  }

  location @rewrite {
    rewrite ^ /index.php;
  }

  location ~ \.php$ {
    fastcgi_split_path_info ^(.+\.php)(/.+)$;
    #NOTE: You should have "cgi.fix_pathinfo = 0;" in php.ini
    fastcgi_pass unix:/var/run/php/php7.0-fpm.sock;
    fastcgi_index index.php;
    include fastcgi_params;
    fastcgi_intercept_errors on;
  }

  location ~ ^/sites/.*/files/styles/ {
    try_files $uri @rewrite;
  }

  location ~* \.(js|css|png|jpg|jpeg|gif|ico)$ {
    expires max;
    log_not_found off;
  }
}
EOF

################################################################################


# Database installs ############################################################
# Install SQLite
inst 'SQLite' sqlite3 libsqlite3-dev

# Install Redis
inst 'Redis' redis-server

# Install RabbitMQ Messaging
inst 'RabbitMQ' rabbitmq-server

debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'

# MySQL Server
# inst 'MySQL Client Core' mysql-clienpt-core-5.5
inst 'MySQL Server' mysql-server
inst 'MySQL Client Library' libmysqlclient-dev
echo "create database laraveldb" | mysql -uroot -proot
################################################################################


# PHP setup ####################################################################
inst mcrypt
inst 'Installing PHP-FPM' php7.0 php7.0-fpm php7.0-cli php7.0-common php7.0-mbstring php7.0-gd php7.0-intl php7.0-xml php7.0-mysql php7.0-mcrypt php7.0-zip
# sudo ln -s /etc/php7/mods-available/mcrypt.ini /etc/php7/php7/conf.d/mcrypt.ini
# sudo php7enmod mcrypt
echo Install Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/
mv /usr/local/bin/composer.phar /usr/local/bin/composer
echo "Adding Composer to path"
echo 'export PATH="/home/vagrant/.composer/vendor/bin:$PATH"' >> /home/vagrant/.bashrc
# composer global require drush/drush
echo Composer update
composer global update
################################################################################


# Service setup ################################################################
# Restart Nginx
echo Restarting Nginx
service nginx restart

# Restart PHP-FPM
echo Restarting PHP-FPM
service php7.0-fpm restart

# Restart MySQL
echo Restarting MySQL
service mysql restart
################################################################################

echo 'Boostrap.sh complete!'
echo '---------------------'
echo 'Check your browser at http://localhost:8080/ to confirm.'
