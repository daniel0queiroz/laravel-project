FROM php:8.1.10-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    unzip zip git curl libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer 2.4.1
RUN curl -sS https://getcomposer.org/download/2.4.1/composer.phar -o /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer

# Set working directory
WORKDIR /var/www/html
