#!/bin/bash

HOST_UID=${HOST_UID:-1000}
HOST_GID=${HOST_GID:-1000}

usermod -u $HOST_UID www-data
groupmod -g $HOST_GID www-data

chown -R www-data:www-data /var/www/html

exec apache2-foreground