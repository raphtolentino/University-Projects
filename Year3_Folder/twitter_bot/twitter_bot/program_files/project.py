# used libraries
import spacy
import time
import datetime
from datetime import date
import random

# spacy settings
nlp = spacy.load("en_core_web_sm")

class diary_entry:
# def for the diary format
    def datetime():
        time = ('01/05/2022')
        diaryTime = "21.00"
# print variable output
        print("Today is: " + time)
        print("Time: " + diaryTime)
    datetime()
    def counter():
        entry_counter = 0
        entry_counter += 1
        print("Entry number " + str(entry_counter))
    counter()
        


