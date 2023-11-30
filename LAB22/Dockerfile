FROM phpid/xampp
COPY codePHP/DSVII/lab_ds7_2022/lab22/lab22.php /opt/lampp/htdocs/
RUN /opt/lampp/lampp start

EXPOSE 80
EXPOSE 433
EXPOSE 21

WORKDIR /opt/lampp/htdocs

CMD ["/bin/bash"]