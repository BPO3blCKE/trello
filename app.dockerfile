 FROM php:7.2.2-fpm
 RUN apt-get update && apt-get install -y mysql-client libpng-dev libjpeg62-turbo-dev \
 && docker-php-ext-install pdo_mysql \
 && docker-php-ext-install gd exif
 RUN chown -R www-data:www-data /var/www
 RUN chmod 755 /var/www