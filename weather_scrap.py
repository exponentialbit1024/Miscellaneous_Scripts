from bs4 import BeautifulSoup
import requests
import re

# url = 'http://www.accuweather.com/en/us/west-lafayette-in/47906/weather-forecast/2135952'
url = 'http://www.accuweather.com/'
urlwl = 'http://www.accuweather.com/en/us/west-lafayette-in/47906/current-weather/2135952'
resp = requests.get(url)
html = resp.text
soup = BeautifulSoup(html, "lxml")

wspans = soup.find_all('div', class_="temp")
locspan = soup.find_all('div', class_="loc")
curloc = locspan[0].text
# for sp in spans:
# 	print(sp)
# 	print('\n')
# print(spans)
curtemp = wspans[0].text
ftemp = re.findall('\d+',curtemp)[0]
feeltemp = re.findall('\d+',curtemp)[1]

celcurtemp = (int(ftemp) - 32) * 5 / 9

respwl = requests.get(urlwl)
htmlwl = respwl.text
soupwl = BeautifulSoup(htmlwl, "lxml")
wspans = soupwl.find_all('span', class_="cond")
curw = wspans[0].text

print("It is "+curw+" outside")
print("The current temperature outside is "+str(celcurtemp)+" degree celsius")