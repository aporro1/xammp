FROM php:8.2-apache

# Install PDO extensions for MySQL connectivity
RUN docker-php-ext-install pdo pdo_mysql

# Print working directory and filesystem information before copy
RUN pwd && \
    echo "=== Build Context Directory Structure ===" && \
    find . -maxdepth 3 -type d && \
    echo "=== Current Directory Contents ===" && \
    ls -la .

# Verify src directory specifically
RUN echo "=== Checking for src directory ===" && \
    ls -la ./src || echo "src directory not found in build context"

# Attempt to copy with detailed error checking
COPY --verbose ./src/ /var/www/html/

# Verify the copied contents and permissions
RUN echo "=== Destination Directory After Copy ===" && \
    ls -la /var/www/html && \
    echo "=== File Ownership Information ===" && \
    stat /var/www/html