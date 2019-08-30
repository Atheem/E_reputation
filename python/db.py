import pymongo


cnx = pymongo.MongoClient("localhost",27017)
db = cnx['E_reputation']
collection = db['posts']


def insert_data(data):
    collection.insert_one(data)

