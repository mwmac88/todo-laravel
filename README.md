# README #

TODO APP - Laravel

### What is this repository for? ###

* My ToDO Application built with Laravel
* Version: 1.1.2

### Pre-requisites ###

* php(v5.6+) & mysql(v5.6+) installed
* node.js & npm latest versions installed
* gulp installed globally:
```
npm install gulp -g
```

### How do I get set up? ###

* Laravel

Database table creation:
```
php artisan migrate
```

Seed database with example tasks:
```
composer dump-autoload
php artisan db:seed
```

* NPM & Gulp

Install node module dependencies:
```
npm install
```

Run gulp to compile sass and js:
```
gulp
```

### ToDo V 1.2 ###

* Fix mdl-button tooltip hovers
* Add delete confirmation modal
* Change card completed/incomplete to custom checkbox
* Add sort-by date or completed

### ToDo V 2.* ###
* Add categories & colour coding
* Add users (login, logout, users->tasks)