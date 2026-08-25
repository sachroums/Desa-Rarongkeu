FROM php:5.6-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

#timezone
ENV TZ=Asia/Jakarta

# Enable Apache rewrite
RUN a2enmod rewrite

# Set Apache document root
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Update Apache configuration
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

#set timezone
RUN echo "date.timezone=Asia/Jakarta" \
    > /usr/local/etc/php/conf.d/timezone.ini
    
# Copy application
COPY . /var/www/html

RUN mkdir -p /tmp/ci3-sessions \
    && chown -R www-data:www-data /tmp/ci3-sessions \
    && chmod 700 /tmp/ci3-sessions

# Allow .htaccess override
RUN printf '<Directory /var/www/html>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' > /etc/apache2/conf-available/codeigniter.conf \
    && a2enconf codeigniter

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]