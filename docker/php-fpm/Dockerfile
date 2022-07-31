FROM phpdockerio/php:8.1-fpm
WORKDIR "/app"

RUN apt-get update
RUN apt-get -y install php8.1-pdo-mysql php8.1-pdo
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
