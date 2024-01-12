1. Dockerイメージをビルドする
`docker build -t flask-app .`
2. Dockerコンテナ起動
`docker run -p 50000:50000 flask-app`
3. アクセス
http://<IPアドレス>:50000/

