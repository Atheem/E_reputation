from bs4 import BeautifulSoup as bs
import requests
import feedparser
import db

#marrakechalaan
def marrakechalaan(url):
    source = requests.get(url).text
    soup = bs(source, 'lxml')
    title = soup.find('h1', {"class": "title"})
    date = soup.find('li', {"class": "authordate"})
    content = soup.find('div', {"id": "contenupost"})
    content_p = content.findAll('p')
    media = soup.find('img', {"class": "attachment-full"})['src']
    article = "\n"
    for div in content_p:
        article += div.text
    if title == "" or date == "" or date == "" or article == "" or media == "":
        data = {'Website': 'https://www.marrakechalaan.com', 'Title': title.text, 'Date': date.text, 'Author': 'None',
                'Content': article, 'Image': media, 'Url': url, 'language': 'AR', 'Template': 'This site template hass been changed'}
        db.insert_data(data)
    else:
        data = {'Website': 'https://www.marrakechalaan.com', 'Title': title.text, 'Date': date.text, 'Author': 'None',
                'Content': article, 'Image': media, 'Url': url, 'language': 'AR'}
        db.insert_data(data)
##safigoud
def safigoud(url):
    source = requests.get(url).text
    soup = bs(source, 'lxml')
    title = soup.find('span', {"class": "post-title"})
    date = soup.find('time', {"class": "post-published updated"})
    content = soup.find('div', {"class": "entry-content clearfix single-post-content"})
    content_p = content.findAll('p')
    media = soup.find('div', {"class": "single-featured"})
    media_i = media.find('img')
    autor = soup.find ('span',{"class": "post-author-name"})
    article = "\n"
    for p in content_p:
        article += p.text

    data = {'Title': title.text, 'Date': date.text, 'Author': autor.text, 'Content': article}
    db.insert_data(data)

##marrakechalyaoum
def marrakechalyaoum(url):
    source = requests.get(url).text
    soup = bs(source, 'lxml')
    title = soup.find('span', {"itemprop": "name"})
    date = soup.find('span', {"class": "tie-date"})
    content = soup.find('div', {"class": "entry" })
    content_p = content.findAll('p')
    media = soup.find('img', {"class": "wp-post-image"})
    autor = soup.find('span',{"class": "post-meta-author"})
    autor_i = soup.find('a')
    article = "\n"
    for p in content_p:
        article += p.text

    data = {'Title': title.text, 'Date': date.text, 'Author': autor_i.text, 'Content': article, 'Image': media['src']}
    db.insert_data(data)


##jamaalfna press
def jamaalfna(url):
    source = requests.get(url).text
    soup = bs(source, 'lxml')
    title = soup.find('h1', {"class": "entry-title"})
    date = soup.find('time', {"class": "entry-date"})
    content = soup.find('div', {"class": "entry-content"})
    content_p = content.findAll('p')
    media = soup.find('img', {"class": "wp-post-image"})
    article = "\n"
    for p in content_p:
        article += p.text
    data = {'Title': title.text, 'Date': date.text, 'Author': 'None', 'Content': article, 'Image': media['src']}
    db.insert_data(data)

##kech24
def kech24(url):
    source = requests.get(url).text
    soup = bs(source, 'lxml')
    title = soup.find('h2', {"itemprop": "name headline"})
    date = soup.find('time', {"itemprop": "dateCreated datePublished"})
    content = soup.find('div', {"itemprop": "text" })
    content_p = content.findAll('p')
    media = soup.find('img', {"itemprop": "image"})
    autor = soup.find ('span',{"itemprop": "author"})
    article = "\n"
    for p in content_p:
        article += p.text
    data = {'Title': title.text, 'Date': date.text, 'Author': autor.txt, 'Content': article, 'Image': media['src']}
    db.insert_data(data)

##le 12
def le12(url):
    source = requests.get(url).text
    soup = bs(source, 'lxml')
    title = soup.find('h1', {"class": "post-title entry-title"})
    date = soup.find('strong', {"class": "inner-text"})
    content = soup.find('div', {"class": "entry-content entry clearfix" })
    content_p = content.findAll('p')
    media = soup.find('img', {"class": "attachment-jannah-image-post size-jannah-image-post lazy-img wp-post-image"})
    article = "\n"
    for p in content_p:
        article += p.text
    data = {'Title': title.text, 'Date': date.text, 'Author': 'None', 'Content': article, 'Image': media['src']}
    db.insert_data(data)

#alayam24
def alayam24(url):
    source = requests.get(url).text
    soup = bs(source, 'lxml')
    title = soup.find('h1', {"class": "heading"})
    date = soup.find('span', {"class": "date"})
    content = soup.find('div', {"class": "articlecontent" })
    content_p = content.findAll('p')
    media = soup.find('img', {"class": "lazy"})
    autor = soup.find ('span',{"class": "writer"})
    article = "\n"
    for p in content_p:
        article += p.text
    data = {'Title': title.text, 'Date': date.text, 'Author': autor.text, 'Content': article, 'Image': media['data-original']}
    db.insert_data(data)

#choufTV
def alayam24(url):
    source = requests.get(url).text
    soup = bs(source, 'lxml')
    title = soup.find('h1', {"class": "title-full-content"})
    date = soup.find('div', {"class": "left-info"})
    date_i = date.find('time')
    content = soup.find('div', {"class": "middleContent" })
    content_p = content.findAll('p')
    media = soup.find('div', {"class": "post-image"})
    media_i = media.find('img')['src']
    article="\n"
    for p in content_p:
        article += p.text
    data = {'Title': title.text, 'Date': date.text, 'Author': 'None', 'Content': article,'Image': media}
    db.insert_data(data)
#Hesspress
def hespress(url):
    source = requests.get(url).text
    soup = bs(source, 'lxml')
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
    data = {'Title': title.text, 'Date': date.text, 'Author': author.text, 'Content': article, 'Image': image}
    db.insert_data(data)