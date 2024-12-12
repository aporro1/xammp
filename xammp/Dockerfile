FROM php:8.2-apache

# Install PDO extensions for MySQL connectivity
RUN docker-php-ext-install pdo pdo_mysql

# Print detailed information about the build environment before copy
RUN echo "====== Build Environment Information ======" && \
    echo "Current working directory:" && \
    pwd && \
    echo "\nDirectory structure:" && \
    find . -maxdepth 3 -type d && \
    echo "\nContents of current directory:" && \
    ls -la . && \
    echo "\nAttempting to check src directory:" && \
    if [ -d "./src" ]; then \
        echo "src directory exists, contents:" && \
        ls -la ./src; \
    else \
        echo "WARNING: src directory not found in build context"; \
    fi

# Copy the source files
COPY ./src/ /var/www/html/

# Verify the copy operation
RUN echo "====== Verification After Copy ======" && \
    echo "Contents of /var/www/html:" && \
    ls -la /var/www/html && \
    echo "\nFile ownership and permissions:" && \
    ls -ln /var/www/html && \
    echo "\nDirectory structure in web root:" && \
    find /var/www/html -type f