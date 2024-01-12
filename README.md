# CTF

## 概要
CTFの問題として作問した１部問題、今後1月のプロジェクト内CTFに向けて追加していく予定

## 作成理由
大学の学園祭CTFとプロジェクト内CTFで作問した問題の一部です。CTFの形式に触れてもらいCTFを知ってもらうことが目的です。

## 問題一覧
### 1000_clicks
大学の学園祭ＣＴＦで作問した問題   
webサイトからのデータの送信方法であるgetのクエリパラメータを知ってもらう目的で作問  
flag設定法：1000_clicks/templates/index.html　L.31  
port:50000   

### directory_traversal
プロジェクト内CTFで作問した問題  
ディレクトリトラバーサルを知ってもらう目的で作問  
flag設定法：directory_traversal/Dockerfile　L.6 環境変数として設定  
port:50100  

### sql-injection
プロジェクト内CTFで作問した問題  
SQLインジェクションを知ってもらう目的で作問    
flag設定法：sql-injection/mysql/initdb.d/02create.sql　L.2  
port:50200  

### sql-injection2
プロジェクト内CTFで作問した問題  
フロントエンドでのエスケープが有効でないことを知ってもらう+自作コードでエスケープ等は作成すべきではないことを伝える目的で作成  
flag設定法：sql-injection2/mysql/initdb.d/02create.sql　L.2  
port:50210  
