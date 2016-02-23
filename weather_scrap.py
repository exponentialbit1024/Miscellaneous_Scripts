from bs4 import BeautifulSoup
import requests
import re

# url = 'http://www.accuweather.com/en/us/west-lafayette-in/47906/weather-forecast/2135952'
url = 'http://www.accuweather.com/'
resp = requests.get(url)
html = resp.text
soup = BeautifulSoup(html, "lxml")

spans = soup.find_all('div', class_="temp")

# for sp in spans:
# 	print(sp)
# 	print('\n')
# print(spans)
curtemp = spans[0].text
ftemp = re.findall('\d+',curtemp)[0]
feeltemp = re.findall('\d+',curtemp)[1]

celcurtemp = (int(ftemp) - 32) * 5 / 9

print(celcurtemp)