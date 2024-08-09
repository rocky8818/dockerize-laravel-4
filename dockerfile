FROM php:7.4-fpm

# Arguments defined in docker-compose(dev or prod)
ARG user
ARG uid
ARG build

# install all the dependencies and enable PHP modules
RUN apt-get update && apt-get upgrade -y && apt-get install -y \
      procps \
      nano \
      git \
      unzip \
      libicu-dev \
      zlib1g-dev \
      libxml2 \
      libxml2-dev \
      libreadline-dev \
      supervisor \
      cron \
      libzip-dev \
      # needed for gd
      libfreetype6-dev \
      libjpeg62-turbo-dev \
      libpng-dev \
      libonig-dev \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
      pdo_mysql \
      sockets \
      intl \
      opcache \
      zip \
    && rm -rf /tmp/* \
    && rm -rf /var/list/apt/* \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j "$(nproc)" gd

RUN apt-get update && apt-get install -y net-tools


# put php config for Laravel
COPY ./src/docker/$build/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./src/docker/$build/php.ini /usr/local/etc/php/php.ini

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www


USER $user