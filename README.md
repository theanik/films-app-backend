## films-app-backend

>Chatleads Laravel/PHP Challange-Backend

## Build Setup
``` bash
# Install Composer Dependencies
composer install

# Create a copy of your .env file
cp .env.example .env

# Generate an app encryption key
php artisan key:generate

# Create an empty database and configure in .env

# Migrate the database
php artisan migrate

php artisan passport:install

#seed
php artisan db:seed

# serve the application at localhost:8000
php artisan serve


```