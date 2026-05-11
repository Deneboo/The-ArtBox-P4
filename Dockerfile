FROM php:8.3-fpm-alpine

RUN apk update && apk upgrade && \
    docker-php-ext-install pdo pdo_mysql && \
    rm -rf /var/cache/apk/*