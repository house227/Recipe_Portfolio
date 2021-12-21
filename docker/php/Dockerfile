# php7.4.1をベースイメージで指定
FROM php:7.4.1-fpm

# COPY php.iniをコピー
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

# Composerのインストール
# 2.0
COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer

# Node.jsのインストール
# 10.22
COPY --from=node:16.13 /usr/local/bin /usr/local/bin
COPY --from=node:16.13 /usr/local/lib /usr/local/lib
# RUNでパッケージ管理ツールの更新(update)とパッケージのインストール(install)
RUN apt-get update && \
    apt-get -y install \
    git \
    zip \
    unzip \
    vim \
    && docker-php-ext-install pdo_mysql bcmath

# PHPコンテナでの作業ディレクトリ(カレントディレクトリ)を指定
WORKDIR /var/www/html