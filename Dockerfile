# Use official PHP image with Apache
FROM php:8.2-apache

# Install extensions (like mysqli)
RUN docker-php-ext-install mysqli

# Copy your project files to Apache's root directory
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
