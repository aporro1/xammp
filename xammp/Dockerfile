FROM php:8.2-apache

# Install PHP extensions needed for MySQL connectivity
RUN docker-php-ext-install pdo pdo_mysql

# The WORKDIR instruction sets the working directory for subsequent instructions
# and also creates the directory if it doesn't exist
WORKDIR /var/www/html

# Copy application files into the container
# This copies everything from your src directory into /var/www/html
COPY ./src/ /var/www/html/

# Set proper permissions for Apache
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Apache configuration and startup command remain the same
CMD ["apache2-foreground"]