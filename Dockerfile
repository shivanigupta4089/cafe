# Use the official PHP-Apache image
FROM php:8.1-apache

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite for .htaccess support
RUN a2enmod rewrite headers

# Set the working directory and copy project files
WORKDIR /var/www/html
COPY . /var/www/html

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Ensure .htaccess is processed
RUN echo "<Directory /var/www/html>
    AllowOverride All
    Require all granted
</Directory>" > /etc/apache2/conf-available/override.conf && a2enconf override

# Expose the default Apache port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
