FROM php:5.6-apache

ENV TZ=Asia/Jakarta
ENV APACHE_DOCUMENT_ROOT=/var/www/html

# PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Apache rewrite
RUN a2enmod rewrite

# PHP timezone
RUN echo "date.timezone=Asia/Jakarta" \
    > /usr/local/etc/php/conf.d/timezone.ini

# Apache configuration
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

# CI3 .htaccess
RUN printf '<Directory /var/www/html>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' \
    > /etc/apache2/conf-available/codeigniter.conf \
    && a2enconf codeigniter

# CI3 session directory
RUN mkdir -p /tmp/ci3-sessions \
    && chown -R www-data:www-data /tmp/ci3-sessions \
    && chmod 700 /tmp/ci3-sessions

EXPOSE 80

CMD ["apache2-foreground"]