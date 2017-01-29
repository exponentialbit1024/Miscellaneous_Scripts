#This script creates a Flask directory structure with demo Hello World on "/" API endpoint
echo "Enter the name of your project and press [ENTER]: "
read pName
mkdir $pName
cd $pName
echo "from app import app\n\nif __name__ == \"__main__\":\n\tapp.run(debug=True)" > run.py
mkdir app
cd app
mkdir static
mkdir static/css
mkdir static/js
mkdir templates
echo "from flask import Flask
app = Flask(__name__)

@app.route(\"/\")
def hello():
    return \"Hello World!\"" > __init__.py
