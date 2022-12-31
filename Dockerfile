FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    libpq-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html

WORKDIR /var/www/html

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN apt update && apt install unzip
# RUN composer install

RUN composer update --optimize-autoloader --no-dev

RUN chown -R www-data:www-data /var/www/html

# CMD php artisan serve