FROM php:7.3-apache
COPY src/ /var/www/html/
ARG ENV=tst
ENV ENV=$ENV
