FROM php:8.0-fpm

RUN apt update && \ 
    apt install -y vim libicu-dev unzip && \ 
    docker-php-ext-install intl pdo_mysql

#composer 
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# install configure file
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

# settings
COPY settings/php.ini /usr/local/etc/php/conf.d/php.ini
