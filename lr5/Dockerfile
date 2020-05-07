FROM php:7.4.3-fpm-alpine

WORKDIR /var/www

COPY . /var/www

RUN docker-php-ext-install pdo
RUN docker-php-ext-install mysqli
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

EXPOSE 9001

CMD ["php-fpm"]