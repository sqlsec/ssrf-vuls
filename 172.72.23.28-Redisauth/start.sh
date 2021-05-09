#!/bin/bash
/usr/sbin/crond
nohup php -S 0.0.0.0:80 -t /var/www/html &
redis-server /etc/redis.conf
