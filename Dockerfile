FROM nginx:alpine

RUN apk update && apk add --no-cache \
    curl \
    bash \
    openssl \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    postgresql-dev \
    nodejs \
    npm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html

WORKDIR /var/www/html

RUN composer install --optimize-autoloader --no-dev

RUN chown -R nginx:nginx /var/www/html
