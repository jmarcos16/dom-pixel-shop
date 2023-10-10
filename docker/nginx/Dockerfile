FROM nginx:alpine

LABEL maintainer="José Marcos"

# Set timezone Brazil
RUN ln -snf /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime && echo "America/Sao_Paulo" > /etc/timezone

# Install system dependencies
RUN apk update \
    && apk upgrade \
    && apk --update add logrotate \
    && apk add --no-cache openssl \
    && apk add --no-cache bash

RUN apk add --no-cache curl

RUN set -x ; \
    addgroup -g 82 -S www-data ; \
    adduser -u 82 -D -S -G www-data www-data && exit 0 ; exit 1

# Set config nginx
RUN rm /etc/nginx/conf.d/default.conf
COPY ./default.conf /etc/nginx/conf.d/

EXPOSE 80 443 8080