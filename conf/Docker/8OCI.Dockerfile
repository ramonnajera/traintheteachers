FROM php:7.3-fpm

RUN apt-get update && apt-get install -y libaio1 unzip \
    && mkdir /opt/oracle \
    && cd /opt/oracle \
    && curl -o instantclient-basic-linux.x64-19.11.0.0.0dbru.zip https://download.oracle.com/otn_software/linux/instantclient/1911000/instantclient-basic-linux.x64-19.11.0.0.0dbru.zip \
    && curl -o instantclient-sdk-linux.x64-19.11.0.0.0dbru.zip https://download.oracle.com/otn_software/linux/instantclient/1911000/instantclient-sdk-linux.x64-19.11.0.0.0dbru.zip \
    && unzip instantclient-basic-linux.x64-19.11.0.0.0dbru.zip -d /opt/oracle \
    && unzip instantclient-sdk-linux.x64-19.11.0.0.0dbru.zip -d /opt/oracle \
    && rm -f instantclient-basic-linux.x64-19.11.0.0.0dbru.zip \
    && rm -f instantclient-sdk-linux.x64-19.11.0.0.0dbru.zip \
    && echo 'instantclient,/opt/oracle/instantclient_19_11' | pecl install oci8-2.2.0 \
    && docker-php-ext-enable oci8