1. Docker イメージをビルドする
   `docker build -t flask-app2 .`
2. Docker コンテナ起動
   `docker run -p 50010:50010 flask-app2`
3. アクセス
   http://<IP アドレス>:50010/
