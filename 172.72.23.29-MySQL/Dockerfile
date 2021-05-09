FROM centos:7
COPY rpm /rpm
RUN cd /rpm && rpm -ivh *.rpm
COPY start.sh /start.sh
RUN chmod -v +x /start.sh
EXPOSE 3306
CMD ["/start.sh"]
