# Use the official PHP 8.2 image with FPM
FROM php:8.2-fpm

# Install necessary packages for PostgreSQL and other utilities
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Install Composer (PHP package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory to /var/www
WORKDIR /var/www

# Copy the existing Laravel project files into the container
COPY . .

# Install PHP dependencies using Composer
RUN composer install

# Expose the port the app will run on
EXPOSE 9000

# Run the PHP-FPM server
CMD ["php-fpm"]
