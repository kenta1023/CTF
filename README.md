# CTF

## 概要

CTF の問題として作問した１部問題、今後 1 月のプロジェクト内 CTF に向けて追加していく予定

## 作成理由

大学の学園祭 CTF とプロジェクト内 CTF で作問した問題の一部です。CTF の形式に触れてもらい CTF を知ってもらうことが目的です。

## 問題一覧

### 1000_clicks

大学の学園祭ＣＴＦで作問した問題  
データの送信方法である get のクエリパラメータを知ってもらう目的で作問  
flag 設定法：1000_clicks/templates/index.html 　 L.31  
port:50000

### 1000_clicks2

プロジェクト内 CTF で作問した問題  
データの送信方法である post を知ってもらう目的で作問  
flag 設定法：1000_clicks2/templates/index.html 　 L.29  
port:50010

### directory_traversal

プロジェクト内 CTF で作問した問題  
ディレクトリトラバーサルを知ってもらう目的で作問  
flag 設定法：directory_traversal/Dockerfile 　 L.6 環境変数として設定  
port:50100

### sql-injection

プロジェクト内 CTF で作問した問題  
SQL インジェクションを知ってもらう目的で作問  
flag 設定法：sql-injection/mysql/initdb.d/02create.sql 　 L.2  
port:50200

### sql-injection2

プロジェクト内 CTF で作問した問題  
フロントエンドでのエスケープが有効でないことを知ってもらう+自作コードでエスケープ等は作成すべきではないことを伝える目的で作成  
flag 設定法：sql-injection2/mysql/initdb.d/02create.sql 　 L.2  
port:50210
