FROM ubuntu:latest

MAINTAINER Ivan Podorozhny <ivan@podorozhny.ru>

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
    apt-get upgrade -y

RUN apt-get install -y \
	curl \
	php5-fpm \
	php5-common \
	php5-cli \
	php5-mcrypt \
	php5-json \
	php5-curl \
	php5-intl \
	php5-imap \
	php5-gd \
	php5-imagick \
	php5-mysql \
	php5-sqlite \
	php5-xdebug

ADD ./config/php5/ /etc/php5/

RUN mkdir -p /var/log/php5-fpm && \
    chmod -R 777 /var/log/php5-fpm

RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

EXPOSE 9000

CMD ["/usr/sbin/php5-fpm", "-F"]
