FROM ubuntu:latest

MAINTAINER Ivan Podorozhny <ivan@podorozhny.ru>

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
    apt-get upgrade -y

RUN echo "deb http://nginx.org/packages/ubuntu/ trusty nginx" >> /etc/apt/sources.list

RUN apt-get install -y ca-certificates nginx && \
    rm -rf /var/lib/apt/lists/*

ADD ./config/nginx/ /etc/nginx/

EXPOSE 80 443

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
