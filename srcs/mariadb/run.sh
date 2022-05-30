#!/bin/sh

mkdir /run/mysqld
chown -R mysql:mysql /run/mysqld
chown -R mysql:mysql /var/lib/mysql
mysql_install_db --basedir=/usr --datadir=/var/lib/mysql --user=mysql --rpm
cat << EOF >init
USE mysql;
FLUSH PRIVILEGES;
DELETE FROM	mysql.user WHERE User='';
DROP DATABASE test;
DELETE FROM mysql.db WHERE Db='test';
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');
ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';
CREATE DATABASE ft_wordpress;
CREATE USER gilee@'localhost';
GRANT ALL PRIVILEGES ON ft_wordpress.* TO gilee@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';
GRANT ALL PRIVILEGES ON ft_wordpress.* TO gilee@'%' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';
CREATE USER gileee@'localhost';
GRANT SELECT ON ft_wordpress.* TO gileee@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';
FLUSH PRIVILEGES;
EOF
/usr/bin/mysqld --user=mysql --bootstrap < init
rm init
exec /usr/bin/mysqld --user=mysql --console
