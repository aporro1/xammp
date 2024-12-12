# Start with the official PHP Apache image
FROM php:8.2-apache

# Install PDO and MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy your source files into the container
COPY ./src/ /var/www/html/