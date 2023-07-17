# Base image
FROM php:8.1-fpm

# Install Nginx
RUN apt-get update && apt-get install -y nginx

# Copy Nginx configuration
COPY docker/nginx.conf /etc/nginx/sites-available/default

# Install PHP extensions (if needed)
# RUN docker-php-ext-install <extension_name>

# Copy PHP application files
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Start Nginx and PHP-FPM
CMD service nginx start && php-fpm
