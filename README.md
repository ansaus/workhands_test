## About
An article website able to work in highload mode  

## How to install
* clone the project
* create new db
* create .env from .env.example and set db, redis, queue settings
* composer install
* npm install
* php artisan key:generate
* php artisan migrate
* php artisan db:seed (if you wanna fill the site with test data)
* php artisan serve
