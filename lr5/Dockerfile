FROM php:7.4.3-fpm-alpine

RUN docker-php-ext-install pdo
RUN docker-php-ext-install mysqli
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


WORKDIR /var/www

COPY . /var/www

EXPOSE 9001

CMD ["php-fpm"]