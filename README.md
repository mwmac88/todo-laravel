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
### Pre-requisites ###

* MySQL database setup
* Creation of .env file in project root with following config added:
```
DB_CONNECTION=mysql
DB_HOST={HOST HERE}
DB_PORT={PORT HERE}
DB_DATABASE={DB NAME HERE}
DB_USERNAME={USERNAME HERE}
DB_PASSWORD={PASSWORD HERE}
```

* Laravel

Ensure APP_URL is set to server url or local in .env and contains a key, if no key:
.env key generate:
```
php artisan key:generate
```

Dependencies:
```
composer update --no-scripts
```

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


### CHANGELOG ###

* V 1.1.6 - Added additional documentation to readme
* V 1.1.5 - Fix to check isset on tasks index
* V 1.1.4 - Updated inuitcss
* V 1.1.3 - Added index route redirect to /tasks
* V 1.1.2 - Minor fix to card (Safari)
* V 1.1.1 - Minor fix to card (Firefox)
* V 1.1 - Added sorting links and controller functionality (index)

### ToDo V 1.2 ###

* Fix mdl-button tooltip hovers
* Add delete confirmation modal
* Change card completed/incomplete to custom checkbox
* Add sort-by: Complete/Date
* Remove unnecessary blade template files

### ToDo V 2.* ###
* Add categories & colour coding
* Add user management (login, logout, users->tasks)