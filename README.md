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

### Caching
use php artisan sync:counters to synchronize view, like counters with db

### Queues
Comments are put into queue 

if you wanna use db queue 
* set QUEUE_CONNECTION=database in env
* if you dont have queue table run the following to create it
* php artisan queue:table
* php artisan migrate
 
php artisan queue:work to start queue listener