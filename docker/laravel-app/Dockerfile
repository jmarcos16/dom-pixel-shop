FROM php:8.2-fpm

LABEL maintainer="José Marcos"

ARG USER
ARG NODEVERSION=18

# Set working directory
WORKDIR /var/www

# Set timezone Brazil

RUN ln -snf /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime && echo "America/Sao_Paulo" > /etc/timezone

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install PHP extensions

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets

# Install Node.js

RUN curl -fsSL https://deb.nodesource.com/setup_${NODEVERSION}.x | bash -
RUN apt-get install -y nodejs

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
# RUN useradd -G www-data,root -u 1000 -d /home/${USER} ${USER}
RUN mkdir -p /home/${USER}/.composer && \
    chown -R ${USER}:${USER} /home/${USER}

# Set permission in tmp folder

RUN chmod -R 777 /tmp

# Set 512 MB memory limit
RUN echo "memory_limit=2024M" > /usr/local/etc/php/conf.d/memory-limit.ini

# Clean Apt cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install vite globally
RUN npm install -g vite

# If env is Local run entrypoint
COPY ./entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh
#ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]


EXPOSE 9000