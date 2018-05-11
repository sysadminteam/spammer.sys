#!/usr/bin/python
import json
import fb
from facepy import GraphAPI

def spam():
    token = "EAACEdEose0cBAMT5t9QGsAxJE6tZCZBVPzZCnFfqs4aLZC5eWQHfTly4w05dsZCpCE5KZCGY7w6jYaLrxqNACbOdYUgyheDXbK5Dsh98CJGo9TJy5KZCemfl1fKwE3JJaa65rKd4U9byfrOVwtJhN8aKjTx9sF39IDQ8cvGNlcGl1ApZBZCEOs2rsG15ZCYKSzPCwZBOCofxoWf8Bpn1TdaU0lI" #Insert access token here.
    facebook = fb.graph.api(token)
    graph1 = GraphAPI(token)

    vid = input("Enter victim's Facebook id: ")
    query = str(vid) + "/posts?fields=id&limit=250"
    r = graph1.get(query)



    idlist = [x['id'] for x in r['data']]
    idlist.reverse()
    print("There are "+ str(len(idlist)) +" spammable posts.")

    char1 = raw_input("Do you want to spam? (y/n) ")
    count = 0
    if char1 == 'y':
        nos = input("Enter number of posts to be spammed with comments: ")
        mess = raw_input("Enter the message to be commented: ")
        if nos <= len(idlist):
           for indid in (idlist[(len(idlist) - nos):]):
            facebook.publish(cat = "comments", id = indid, message = mess) #Comments on each post
            facebook.publish(cat = "likes", id = indid) #Likes each post
            count += 1
            print("Notification number: " + str(count) + " on www.facebook.com/" + str(indid).split('_')[0]
              + "/posts/" + str(indid).split('_')[1])
        else:
          print("Not that many spammable posts available. No spam happening.")
    else :
      print("No spam happening then.")

spam()
