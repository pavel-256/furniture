# importing bs4, requests, fake_useragent and csv modules
import bs4
import requests
from fake_useragent import UserAgent

# create an array with URLs
urls = ['https://www.jerusalem.muni.il/he/contactus/reception_hours/']

# initializing the UserAgent object
user_agent = UserAgent()

# starting the loop
for url in urls:
    # getting the response from the page using get method of requests module
    page = requests.get(url, headers={"user-agent": user_agent.chrome})

    # storing the content of the page in a variable
    html = page.content

    # creating BeautifulSoup object
    soup = bs4.BeautifulSoup(html, "html.parser")
    table = soup.findAll('table')
    print(table)
    table_rows = table.find_all('tr')
    print(table_rows)
