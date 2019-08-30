from bs4 import BeautifulSoup as BS
import requests
import feedparser
import db
#Alayam24











'''
article = soup.find('div', id="article_holder")
title = article.find('h1', class_="page_title")
images = article.find('img')
print(images.prettify())
'''

'''
filename = "jribo.csv"
f = open(filename, "a", encoding='utf-8')


f.write("\n"+title.text+content)
f.close()
'''


#Hesspress

source = requests.get('https://www.hespress.com/regions/440669.html').text
soup = BS(source, 'lxml')
title = soup.find('h1', {"class": "page_title"})
author = soup.find('span', {"class": "story_author"})
date = soup.find('span', {"class": "story_date"})
image_div = soup.find('div', {"id": "article_holder"})
image = image_div.find('img')['src']
article = soup.find('div', {"id": "article_body"})
article_p = article.findAll('p')
content = "\n"
for p in article_p:
    content += p.text
print(content)


print("Title: " + title.text + "\n Author: " + author.text + "\n date: " + date.text +"\n Content:" + content + "\n Image link: " + image)
data = {'Title': title.text, 'Date': date.text, 'Author': author.text, 'Content': content, 'Image': image}
db.insert_data(data)

