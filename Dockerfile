FROM php:8.2-apache
COPY . /var/www/html/
RUN docker-php-ext-install PDO MySQL 
RUN a2enmod rewrite
EXPOSE 80
