FROM php:8.2-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        libpq-dev \
        libxml2-dev \
        libxslt-dev \
        libenchant-2-dev \
        unixodbc \
        libgss3 \
        odbcinst \
        devscripts \
        debhelper \
        dh-exec \
        dh-autoreconf \
        libreadline-dev \
        libltdl-dev \
        unixodbc-dev \
        wget \
        unzip \
        git \
        zip \
        zlib1g-dev \
        locales \
        libbz2-dev \
        libsodium-dev && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd bcmath bz2 calendar enchant exif \
        gettext mysqli pdo_mysql pdo pdo_pgsql zip soap sockets xsl pcntl \
        sodium

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

RUN pecl install xdebug-3.2.1 timezonedb swoole && \
    docker-php-ext-enable xdebug timezonedb swoole

EXPOSE 9000
