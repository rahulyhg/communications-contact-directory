# Communications Contact Directory

## Prerequisites

You'll probably want the following:

* Vagrant
* Git
* If you're running Windows, an ssh tool

## Installation
### Download the repo
    $ git clone https://github.com/dereknutile/communications-contact-directory.git /path/to/project

### Start the application
    $ cd /path/to/project
    $ vagrant up

### Configure the database
Open the file `core/config/database.php` and fill in the connection variables -- namely, host, database, username and password.  Note your database name here.

### Access the application using SSH
    $ vagrant ssh

### Create the database
    $ mysql -uroot -proot
    $ create database {database_name_from_above_step};

### Update application
    $ cd /vagrant/
    $ bower install
    $ cd /vagrant/core/
    $ composer install

