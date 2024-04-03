FROM php:8.2-fpm

RUN apt-get update
RUN apt-get install -y curl
RUN docker-php-ext-install pdo pdo_mysql
RUN chmod +x /usr/local/bin/*
RUN apt-get remove -y git && apt-get autoremove -y && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /usr/share/nginx/html

ENTRYPOINT [ "php-fpm" ]