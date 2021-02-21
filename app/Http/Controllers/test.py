import bs4
from bs4 import BeautifulSoup
from selenium import webdriver
from fake_useragent import UserAgent
import requests

# create an array with URLs
urls = ['https://xyz.com/page/1', 'https://xyz.com/page/2']

# initializing the UserAgent object
user_agent = UserAgent()

# starting the loop
for url in urls:
    # getting the reponse from the page using get method of requests module
    page = requests.get(url, headers={"user-agent": user_agent.chrome})

    # storing the content of the page in a variable
    html = page.content

    # creating BeautifulSoup object
    soup = bs4.BeautifulSoup(html, "html.parser")

    # Then parse the HTML, extract any data
    # write it to a file
# the webdriver
driver = webdriver.Chrome("D:/utl/chromedriver.exe")

# main url
url = 'https://www.yadvashem.org/he/visiting/opening-hours.html'
url2 = 'https://www.yadvashem.org/he/visiting/private-tour.html'
driver.get(url, url2)
html = driver.page_source

# the data parsing
soup = BeautifulSoup(html, 'html.parser')

# the table wee need
my_table = soup.find('table', class_='table table-bordered table-hover')
my_table2 = soup.find('p')

filename = "yadVashem.csv"
f = open(filename, "w", encoding="utf-8")

# the columns headers + main header

headers = "יד ושם שעות פתיחה\n יום, שעה\n"
f.write(headers)

# the iteration over the data
for table in my_table.find_all('tbody'):
    rows = table.find_all('tr')
    for row in rows:
        table = row.find_all('td')
        table_day = table[0].text
        table_time = table[1].text
        print(table_day)
        print(table_time)

        f.write(table_day + "," + table_time + "\n")

f.close()
