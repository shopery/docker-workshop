FROM php:8.0-fpm

# Install Debian dependences
RUN apt-get update \
    && apt-get install -y \
        libicu-dev \
        msmtp \
        iputils-ping \
    && apt-get clean all \
;

# Install PHP Extensions
RUN docker-php-ext-install pdo_mysql \
;

# Configure mail
COPY config/php-mail.conf /usr/local/etc/php/conf.d/mail.ini
COPY config/msmtprc /etc/msmtprc


