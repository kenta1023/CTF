from flask import Flask, request, render_template, redirect, url_for
import os

app = Flask(__name__, static_folder='./templates/images')

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/file')
def file():
    file_name = request.args.get('file_name')
    data = ''
    if file_name:
        try:
            with open(f"./src/public/{file_name}", mode="r", encoding="UTF-8") as f:
                data = f.read()
            return render_template('file.html',file_name=file_name, data=data)
        except FileNotFoundError:
            data = "そのようなfileは存在しません"
            return render_template('file.html',file_name=file_name, data=data)
    return redirect(url_for('index'))# user関数に遷移する。

if __name__ == '__main__':
    # 環境変数 'FLAG' の値を取得
    flag_value = os.environ.get('FLAG')

    # FLAGの値を ./src/secret/flag ファイルに書き込む
    with open('./src/secret/flag', mode='w', encoding='UTF-8') as f:
        f.write(flag_value)

    app.run(host='0.0.0.0', port=80)
