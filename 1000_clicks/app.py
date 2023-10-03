from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    count = request.args.get('count', default=0, type=int)
    return render_template('index.html', count=count)

