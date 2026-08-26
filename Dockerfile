FROM php:8.1-apache

RUN apt-get update && apt-get install -y mariadb-server mariadb-client libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install mysqli gd \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/* \
    && rm -rf /var/lib/mysql/* \
    && mkdir -p /var/lib/mysql /var/run/mysqld \
    && chown -R mysql:mysql /var/lib/mysql /var/run/mysqld \
    && { \
        echo "mysqli.default_socket=/run/mysqld/mysqld.sock"; \
        echo "pdo_mysql.default_socket=/run/mysqld/mysqld.sock"; \
       } > /usr/local/etc/php/conf.d/mysql-socket.ini

WORKDIR /var/www/html
COPY . .
COPY schema.sql /docker-db-init/schema.sql
RUN chown -R www-data:www-data /var/www/html
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENV DB_NAME=synapse
ENV DB_DUMP_FILE=schema.sql

EXPOSE 80
ENTRYPOINT ["/entrypoint.sh"]
