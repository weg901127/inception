FROM alpine:3.13

RUN apk update && apk upgrade \
    && apk add --no-cache \
    nginx \
    openrc \
    openssl \
    && openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR" -keyout ssl.key -out ssl.crt \
    && chmod 600 ssl.* \
    && chown -R nginx:nginx ssl.* \
    && mv ssl.* /etc/nginx
ADD ./default.conf /etc/nginx/conf.d/default.conf
ADD ./run.sh run.sh
RUN mkdir -p /run/nginx
ENTRYPOINT ["/bin/sh", "run.sh"]
