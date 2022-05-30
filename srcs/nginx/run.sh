#!/bin/sh

chown -R nginx:nginx /var/lib/nginx
chown -R nginx:nginx /run/nginx
chown -R nginx:nginx /etc/nginx

exec nginx -g "daemon off;"
