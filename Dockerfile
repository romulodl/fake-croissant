FROM php:alpine

WORKDIR /var/www/fake-croissant

COPY ["router.php", "./"]

CMD ["php", "-S", "0.0.0.0:80", "router.php"]
