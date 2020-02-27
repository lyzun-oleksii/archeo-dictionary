FROM php:7.4.3-fpm

ENV USER=docker
ENV UID=1001
ENV GID=1001

RUN apt-get update && apt-get install -y \
        git \
        curl \
        wget \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libonig-dev \
        libzip-dev \
        libpng-dev zlib1g-dev libicu-dev g++ libmagickwand-dev --no-install-recommends libxml2-dev

RUN docker-php-ext-configure intl && docker-php-ext-install intl
RUN docker-php-ext-install zip xml gd pdo_mysql mysqli
RUN pecl install imagick && docker-php-ext-enable imagick
RUN pecl install xdebug-2.9.0 && docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /apps/backend/

COPY /apps/backend/ /apps/backend/