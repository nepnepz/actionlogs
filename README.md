# actions-log

This simple package allows you to keep logs in the database of each action such as store (), update (), destroy () and others

## instalation

### 1. instal from Composer
<pre>composer require nepnepz/laravel-actions-log</pre>

### 2. Publish the migration file
<pre>php artisan vendor:publish --provider="Nepnepz\Actionslog\ActionsLogServiceProvider"</pre>
By default in the migration file there is a user id column that is related to the users table
