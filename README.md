Shortener links service on Laravel.
# Link Shortener App
This is my Shortener links service on Laravel.

### Dependencies:

* PHP 8.3.3
* Laravel 10
* Composer 2.6.6
  
For my project I used `MySql` 8.0 version.

### Installation:

1. Clone the project.

2. Install composer packages:
```commandline
composer install
```
3. Rename `.env.example` into `.env` (or make copy and rename it). Set database connection.

4. Use command for making migrations:
```commandline
php artisan migrate 
```
5. Run server:
```commandline
php artisan serve
```
6. Sing up and enjoy!

## Features:

* Create new short links.
* See specific short link after creating.
* See list of links  and counters.
* Pagination.
