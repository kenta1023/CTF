1. Dockerイメージをビルドする
`docker build -t flask-app .`
2. Dockerコンテナ起動
`docker run -p 5000:5000 flask-app`
3. アクセス
http://<IPアドレス>:5000/

