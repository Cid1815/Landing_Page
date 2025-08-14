# Use PHP with Apache
FROM php:8.2-apache

# Copy your code into Apache's web directory
COPY . /var/www/html/

# Set permissions (optional but good practice)
RUN chown -R www-data:www-data /var/www/html

# Expose the default Apache port
EXPOSE 80
