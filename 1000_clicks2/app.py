from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        # POSTリクエストからcountを取得、デフォルト値は0
        count = request.form.get('count', default=0, type=int)
    else:
        # GETリクエストの場合、countを0に設定
        count = 0
    return render_template('index.html', count=count)

