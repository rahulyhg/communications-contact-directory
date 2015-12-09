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
1. Copy the `core/config/database.example.php` to `core/config/database.php`.
2. Open the file `core/config/database.php` in an editor and fill in the connection variables -- namely, **host**, **database**, **username** and **password**; note your database name here.

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

### Seed the database
    $ php artisan migrate
    $ php artisan db:seed

### Test
Browse to [http://localhost:8080/](http://localhost:8080/).

#### Note
If you see an error similar to: ` No supported encrypter found. The cipher and / or key length are invalid.`, you will need to generate a key using this command:

    $ php artisan key:generate
    Application key [new_key] set successfully.

Once you have the `[new_key]`, you need to enter that key in `core/config/app.php` by replacing the value in the line that looks like this: `'key' => env('APP_KEY', 'SomeRandomString')`.