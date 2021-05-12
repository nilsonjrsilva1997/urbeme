#!/bin/bash

php artisan migrate:fresh
php artisan passport:install --force
composer dump-autoload
php artisan optimize
php artisan db:seed
php artisan serve
