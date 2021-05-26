FROM php:7.4-fpm AS php-base

ARG DEBIAN_FRONTEND=noninteractive
RUN mv "/usr/local/etc/php/php.ini-production" "/usr/local/etc/php/php.ini"

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        zlib1g-dev \
        libzip-dev \
        zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql mysqli zip

FROM php-base AS wp-cli

RUN curl -sSLO https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
  && cp wp-cli.phar /usr/local/bin/wp \
  && chmod +x /usr/local/bin/wp

FROM wp-cli AS mta-base
RUN apt-get install -y \
        golang-go \
        git \
    && go get github.com/mailhog/mhsendmail \
    && cp /root/go/bin/mhsendmail /usr/local/bin/mhsendmail

FROM mta-base AS wordpress-base

# I'm creating a container with all plugins built-in
# so there's no delay or influence from external items
RUN mkdir -p /var/www/html
COPY ./wordpress /var/www/html
COPY ./plugins /var/www/html/wp-content/plugins
RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html
