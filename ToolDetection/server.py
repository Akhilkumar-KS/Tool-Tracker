from flask import Flask, render_template,request,jsonify,make_response,redirect
from util import detect
import os
import json

UPLOAD_FOLDER="./upload"

app = Flask(__name__)
app.config['SECRET_KEY'] = 'vnkdjnfjknfl1232#'
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER


@app.route("/", methods=['POST'])
def wish():
    return "hello"

@app.route("/detectTool", methods=['POST'])
def detectTool():
    try:
        if request.method == 'POST':
            if 'imageName' not in request.form:
                return 'error'
            path = request.form.get('imageName')
            print(path)
            res=detect(path=path)
            return json.dumps(res,default=str)

        return 'ok'
    except Exception as e:
        print(e)
        return "error"

if __name__ == '__main__':
    app.run(debug=True,port=3000)