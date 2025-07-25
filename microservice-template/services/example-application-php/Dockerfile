FROM php:8.4-fpm-alpine

RUN apk add --no-cache --virtual .build-deps \
  git unzip curl openssh && \
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENTRYPOINT ["php-fpm"]

