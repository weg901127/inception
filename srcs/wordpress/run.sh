#!/bin/sh

sed -i 's/listen = 127.0.0.1:9000/listen = 0.0.0.0:9000/g' /etc/php8/php-fpm.d/www.conf
sed -i 's/;clear_env = no/clear_env = no/g' /etc/php8/php-fpm.d/www.conf

exec php-fpm8 -F
