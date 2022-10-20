FROM php:7.4-fpm

#Excecute command
# docker-php-ext-install : install extesion
RUN docker-php-ext-install pdo pdo_mysql