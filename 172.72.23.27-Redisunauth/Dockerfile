FROM centos:7
COPY rpm /rpm
RUN cd /rpm && rpm -ivh *.rpm
COPY redis-* /usr/local/bin/
COPY redis.conf /etc/
COPY start.sh /start.sh
RUN chmod -v +x /start.sh
EXPOSE 6379
CMD ["/start.sh"]