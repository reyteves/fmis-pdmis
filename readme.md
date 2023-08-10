Installation Guide

1. If there is a compatibility error with the PHP version

composer update --ignore-platform-reqs

composer update

2. create this .env file:

APP_NAME="Project Development Management Information System"

APP_ENV=local

APP_KEY=base64:atODCjmjuZ5nmfUYJHQBRN6taW8cVXMluRCckqZq9LQ=

APP_DEBUG=true

APP_LOG_LEVEL=debug

APP_URL=http://localhost

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=fms_db

DB_USERNAME=root

DB_PASSWORD=null

3. Import fms_db. sql in XAMPP. Open XAMPP.
4. php artisan serve to open file

Reference:

https://sourcecodester.com/php-laravel-file-management-system-source-code
