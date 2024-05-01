
FROM php:8.2.17-fpm

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

RUN chown -R www-data:www-data /var/www/html

