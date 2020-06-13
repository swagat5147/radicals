from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/')
def index():
    return "Hello, World!"
@app.route('/getp', methods=['POST'])
def get_price():
	print(request.get_json())
	return 200

if __name__ == '__main__':
    app.run(debug=True)