# docker build -t directory_traversal .
# docker run -p 50100:80 directory_traversal
FROM python:3.9-slim-bookworm

# 環境変数FLAGを設定
ENV FLAG=kitsec{testflag}

RUN mkdir /app
WORKDIR /app

COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY app.py .
COPY src ./src
COPY templates ./templates

CMD ["python", "app.py"]