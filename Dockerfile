FROM php:7.3-apache
COPY src/ /var/www/html/
ARG SEB_ENV=tst
ENV SEB_ENV=$SEB_ENV
# Test webhook 2
