FROM php:7.4.3-fpm

ARG USER_ID
ARG GROUP_ID

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

RUN if getent passwd www-data; then \
    userdel -f www-data &&\
    if getent group www-data ; then groupdel www-data; fi &&\
    groupadd -g ${GROUP_ID} www-data &&\
    useradd -l -u ${USER_ID} -g www-data www-data &&\
    install -d -m 0755 -o www-data -g www-data /home/www-data &&\
    chown --recursive \
          --from=33:33 ${USER_ID}:${GROUP_ID} \
        /home/www-data \
        /apps/backend/ \
;fi

RUN chown ${USER_ID}:${GROUP_ID} storage/logs -R && chmod g+s storage/logs/ -R

USER www-data