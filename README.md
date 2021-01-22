# Cidadao-api

### Run Composer install  
``
$ composer install
``

Then, create the database and its schema:  
``
$ bin/console doctrine:database:create  
``
     
``
$ bin/console doctrine:schema:create
``

### Built-in PHP server
And start the built-in PHP server:  
``
$ php -S 127.0.0.1:8000 -t public
``
