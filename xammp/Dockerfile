FROM php:8.2-apache

# Let's see what files are available during build
RUN ls -la /var/www/html
RUN ls -la .
RUN pwd

# Install PDO and MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy with verbose flag to see what's being copied
COPY --verbose ./src/ /var/www/html/

# Verify the copy worked
RUN ls -la /var/www/html