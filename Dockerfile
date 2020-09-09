FROM php:7.4-apache

RUN apt-get update -y && apt-get install git nano -y --no-install-recommends && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install zip
SHELL ["/bin/bash", "-o", "pipefail", "-c"]
RUN apt-get update && apt-get install -y --fix-missing --no-install-recommends apt-utils gnupg && \
    echo "deb http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list && \
    echo "deb-src http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list && \
    curl -sS --insecure https://www.dotdeb.org/dotdeb.gpg | apt-key add - && \
    apt-get install -y --no-install-recommends \
    zlib1g-dev \
    libzip-dev && \
    docker-php-ext-install zip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql

# Install intl
RUN apt-get update && apt-get install -y --no-install-recommends libicu-dev && \
    docker-php-ext-install -j$(nproc) intl && \
    docker-php-ext-install intl && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

# Rewrite url
RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . /var/www/html

# Help about modules of apache with php image on docker hub
# Link: https://gist.github.com/giansalex/2776a4206666d940d014792ab4700d80