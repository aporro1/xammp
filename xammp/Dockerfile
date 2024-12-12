FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

# Add these lines before the COPY command
RUN echo "Contents of source directory before copy:"
RUN ls -la .

COPY ./src/ /var/www/html/

# Add these lines after the COPY command
RUN echo "Contents of /var/www/html after copy:"
RUN ls -la /var/www/html