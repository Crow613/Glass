FROM php:8.2-fpm-alpine

# install php extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# copy application files to the working directory
COPY . .