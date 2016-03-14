import cv2
import numpy as np

img = cv2.imread('codetest1.jpg')
# img = cv2.resize(img, None, fx = 0.5, fy = 0.5, interpolation = cv2.INTER_CUBIC)
gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)

cv2.imshow('test', gray)

ret,thresh = cv2.threshold(gray,100,255,0)
image, contours, hierarchy = cv2.findContours(thresh,cv2.RETR_EXTERNAL,cv2.CHAIN_APPROX_SIMPLE)

mask = np.zeros(gray.shape,np.uint8)
eachCont = []

conts = []

for i in range(len(contours)):
	conts.append([])

n = 0
while n < len(contours):
	x,y,w,h = cv2.boundingRect(contours[n])
	eachCont = cv2.drawContours(mask,[contours[n]],0,255,-1)
	cont = mask[y:y+h,x:x+w]
	print(cont)
	conts[n] = cont
	cv2.imshow('conts', cont)
	k = cv2.waitKey(0) & 0xff
	if k == 32:
		break
	cv2.destroyWindow('conts')
	pixelpoints = np.transpose(np.nonzero(mask))
	n = n + 1
cv2.destroyAllWindows()
# cv2.drawContours(img, [cnt], 0, (0,255,0), 3)
conts1 = cv2.drawContours(gray, contours, -1, (0,255,0), 3)
cv2.drawContours(img, contours, -1, (0,255,0), 3)
print(conts)
absdiff = np.invert(cv2.absdiff(cv2.cvtColor(img, cv2.COLOR_BGR2GRAY),conts1,None))
# syntax = gray - absdiff

cv2.imshow('test', img)
cv2.waitKey(0)
cv2.destroyAllWindows()