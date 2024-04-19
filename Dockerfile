FROM php:8-fpm

# Atualize os pacotes e instale as dependências necessárias
RUN apt-get update \
    && apt-get install -y \
        git \
        unzip \
        libzip-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libonig-dev \
        libxml2-dev \
        nano \
        nginx \
        supervisor \
        default-mysql-client \
        ssmtp \
    && docker-php-ext-install pdo_mysql mysqli gd zip mbstring exif pcntl bcmath soap

# Configure o ssmtp
RUN echo "root=postmaster\n\
mailhub=mailhog:1025\n\
hostname=your-email@example.com\n\
FromLineOverride=YES" > /etc/ssmtp/ssmtp.conf

# Configuração do PHP para usar o ssmtp como agente de sendmail
RUN echo "sendmail_path = /usr/sbin/ssmtp -t" > /usr/local/etc/php/conf.d/mail.ini

COPY php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
