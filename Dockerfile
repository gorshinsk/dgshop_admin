FROM php:8.2-fpm

# Установка необходимых пакетов и расширений
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libicu-dev \
    unzip \
    && docker-php-ext-install pdo_mysql zip intl

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Установка рабочего каталога
WORKDIR /var/www/html

# Копирование файлов проекта
COPY . /var/www/html

# Установка зависимостей Laravel
RUN composer install
