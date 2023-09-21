FROM php:7.3-fpm
RUN apt-get update

RUN apt-get install -y --no-install-recommends \
    libaio1 \
    unzip \
    libfreetype6-dev \
    libicu-dev \
    libjpeg-dev \
    libmagickwand-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev

RUN mkdir /opt/oracle \
    && cd /opt/oracle \
    && curl -o instantclient-basic-linux.x64-19.11.0.0.0dbru.zip https://download.oracle.com/otn_software/linux/instantclient/1911000/instantclient-basic-linux.x64-19.11.0.0.0dbru.zip \
    && curl -o instantclient-sdk-linux.x64-19.11.0.0.0dbru.zip https://download.oracle.com/otn_software/linux/instantclient/1911000/instantclient-sdk-linux.x64-19.11.0.0.0dbru.zip \
    && unzip instantclient-basic-linux.x64-19.11.0.0.0dbru.zip -d /opt/oracle \
    && unzip instantclient-sdk-linux.x64-19.11.0.0.0dbru.zip -d /opt/oracle \
    && rm -f instantclient-basic-linux.x64-19.11.0.0.0dbru.zip \
    && rm -f instantclient-sdk-linux.x64-19.11.0.0.0dbru.zip \
    && echo 'instantclient,/opt/oracle/instantclient_19_11' | pecl install oci8-2.2.0 \
    && docker-php-ext-enable oci8

# Install Postgre PDO
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

RUN docker-php-ext-install -j "$(nproc)" \
    bcmath \
    exif \
    gd \
    intl \
    zip

# php7.3
RUN docker-php-ext-configure gd \
    --with-freetype-dir \
    --with-jpeg-dir \
    --with-webp-dir

# RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN pecl install imagick-3.7.0 && docker-php-ext-enable imagick

RUN set -eux; \
docker-php-ext-enable opcache; \
{ \
echo 'opcache.memory_consumption=128'; \
echo 'opcache.interned_strings_buffer=8'; \
echo 'opcache.max_accelerated_files=4000'; \
echo 'opcache.revalidate_freq=2'; \
echo 'opcache.fast_shutdown=1'; \
} > /usr/local/etc/php/conf.d/opcache-recommended.ini