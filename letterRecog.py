#for Mac use brew install pillow for install PIL and then install pytesseract as sudo pip install pytesseract

try:
	import Image
except:
	from PIL import Image
import pytesseract
print(pytesseract.image_to_string(Image.open('diffTest3.jpg')))