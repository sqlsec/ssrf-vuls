FROM centos:7
COPY rpm /rpm
RUN cd /rpm && rpm -ivh *.rpm
COPY redis-* /usr/local/bin/
COPY flag /flag
COPY redis.conf /etc/
COPY start.sh /start.sh
COPY www/* /var/www/html
RUN chmod -v +x /start.sh
EXPOSE 80
EXPOSE 6379
CMD ["/start.sh"]
