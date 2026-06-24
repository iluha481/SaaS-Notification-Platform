FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    bash \
    git \
    curl \
    unzip \
    libpq-dev \
    rabbitmq-c-dev \
    autoconf \
    g++ \
    make \
    linux-headers

RUN docker-php-ext-install pdo pdo_pgsql sockets

RUN pecl install redis \
    && docker-php-ext-enable redis

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html