FROM alpine:3.13
RUN apk update && apk upgrade && apk add --no-cache \
    mysql \
    mysql-client
COPY run.sh /run.sh
ADD ./db_preset/ /var/lib/mysql/
ADD ./my.cnf /etc/my.cnf
ENTRYPOINT ["/bin/sh", "run.sh"]
