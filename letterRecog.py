#for Mac use brew install pillow for install PIL and then install pytesseract as sudo pip install pytesseract
import numpy as np
import cv2
try:
	import Image
except:
	from PIL import Image
import pytesseract
pilImage = Image.open('diffTest3.jpg')

print(pytesseract.image_to_string(pilImage))

imgArray = np.array(pilImage.getdata(),np.uint8).reshape(pilImage.size[1], pilImage.size[0], 3)