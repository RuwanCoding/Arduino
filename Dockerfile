FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx

COPY nginx.conf /etc/nginx/nginx.conf
COPY index.php /var/www/html/index.php
COPY upload.php /var/www/html/upload.php

RUN mkdir -p /var/www/html/uploads && chmod 777 /var/www/html/uploads

EXPOSE 80

CMD sh -c "php-fpm -D && nginx -g 'daemon off;'"
