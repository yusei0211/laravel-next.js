# laravel-next.js
clone後に、
docker-compose build
docker-compose up -d
を入力し、コンテナを立ち上げる。

docker-compose exec backend bash
でバックエンド側のコンテナに入り、
composer等をインストールする。

docker-compose exec frontend bash
でフロント側のコンテナに入り、
node.js等をインストールする。

バックエンド側のサーバーを立てるコマンド:php artisan serve --host=0.0.0.0

フロントエンド側のサーバーを立てるコマンド:npm run dev

.envファイルで環境変数の設定するのを忘れずに。.env.exampleとdocker-compose.ymlを参考にお願いします。

※新しくファイルなどを作成した時は、chmod -R 777 *で権限を緩める必要があります。(dockerの設定がうまくいきませんでした。)
