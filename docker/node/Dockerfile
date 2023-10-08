#FROM node:16-alpine
# 現在のイメージのベースとなるイメージを指定
FROM node:18


# ユーザーを追加して権限を設定
RUN npm install -g npm@latest
RUN groupadd -r myuser && useradd -m -r -g myuser myuser
USER myuser

# その他の設定やコマンド
WORKDIR /var/www

USER node