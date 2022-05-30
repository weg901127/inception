FROM alpine:3.13
RUN apk update && apk upgrade \
    && apk add --no-cache \
            mariadb-client \
            curl \
            php8 \
            php8-fpm \
            php8-opcache \
            php8-gd \
            php8-mysqli \
            php8-zlib \
            php8-curl
COPY run.sh /run.sh
ADD ./php.ini /etc/php8/php.ini
ENTRYPOINT ["/bin/sh", "run.sh"]
