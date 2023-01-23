from flask import Flask, request , jsonify
import os

app = Flask(__name__)

@app.route('/upload', methods=['POST'])
def upload():
    image = request.files['image']
    image.save('image.jpg')
    return 'Image received and processed.'

@app.route('/search',methods=['GET'])
def search():
    url = os.system('python imgup.py image.jpg')
    yandex = os.system('python yandex.py '+url)
    tineye = os.system('python tineye.py '+url)
    bing = os.system('python bing.py '+url)
    google = os.system('python google.py image.jpg')
    os.system('del image.jpg') #rm image.jpg
    return jsonify( y = yandex , te = tineye , b = bing , g = google)

if __name__ == '__main__':
    app.run(debug=True)


#flask run
