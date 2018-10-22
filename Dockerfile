FROM php:7.2-apache

RUN apt-get update && apt-get install -y \
       python \
       python python-pip \
    && pip install requests \
    && rm -rf /var/lib/apt/lists/*

COPY /html/check_status.php /var/www/html/
COPY /html/health.php /var/www/html/
COPY /html/web_health.py /var/www/html/

#ENV HEALTHCHECK1 cakephp-tooling.ocp1.sdn.gb.gsclabs.cc
#ENV HEALTHCHECK2 myserver

EXPOSE 80
