# Nginxのalpineはディスク容量が少ない
FROM nginx:1.18-alpine

# 環境変数TZの設定
ENV TZ=UTC

# Nginxの設定ファイル(config file)をコンテナ内にコピー
COPY ./docker/nginx/*.conf /etc/nginx/conf.d/

WORKDIR /var/www/html