import requests
from bs4 import BeautifulSoup

page = requests.get("https://weather.com/en-IN/weather/today/l/af60f113ba123ce93774fed531be2e1e51a1666be5d6012f129cfa27bae1ee6c")
soup = BeautifulSoup(page.content,"html.parser")
other_card = soup.find("div", {"class" : "today_nowcard-sidecar component panel"}).find("table").find("tbody")
extra_weather_attr = {
    "wind" : "",
    "humidity" : "",
    "dew point" : "",
    "pressure" : "",
    "visibility" : ""
}
for item in other_card:
    if item.find("th").text.lower() in extra_weather_attr.keys():
        extra_weather_attr[item.find("th").text.lower()] = item.find("span").text

print(extra_weather_attr)