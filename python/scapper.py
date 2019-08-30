from bs4 import BeautifulSoup as BS
import requests
import lxml
import feedparser
import db
import scrapped_sites
import re


start = '&url='
end = '&ct='
url_list = []
NewsFeed = feedparser.parse("https://www.google.com/alerts/feeds/17869492401663901775/17744484605661625934")
entry = NewsFeed.entries
for post in entry:
   tst = post['link']
   url_list.append(tst[tst.find(start)+len(start):tst.rfind(end)])


for url in url_list:
    if ("safigoud" in url):
        try:
         scrapped_sites.safigoud(url)
        except:''

    elif ("marrakechalyaoum" in url):
        try:
         scrapped_sites.marrakechalyaoum(url)
        except:''

    elif ("marrakechalaan.com" in url):
        try:
            scrapped_sites.marrakechalaan(url)
        except:''

    elif("jamaalfna" in url):
        try:
            scrapped_sites.jamaalfna(url)
        except:''
    elif("kech24" in url):
        try:
         scrapped_sites.kech24(url)
        except:''

    elif ("le12" in url):
        try:
            scrapped_sites.le12(url)
        except:''
    elif ("alayam24" in url):
        try:
            scrapped_sites.alayam24(url)
        except:''
    elif ("hespress" in url):
        try:
            scrapped_sites.jamaalfna(url)
        except:''


