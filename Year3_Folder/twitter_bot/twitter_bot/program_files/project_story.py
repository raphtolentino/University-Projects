from typing import final
import names
import spacy
import random
from project import *
import tweepy # twitter API
# class for this project
class scenarios():  
    # story one
    def scenario_one():
        global store_choice        # store choice
        global friends_choice
        global activity_choice
    #story variable
        global scenario_one_story
# variables for items
    #shirt items
        item_one = "a Gym T-Shirt"
        item_two = "a Polo T-Shirt"
        #shoes items
        items_three = "a White Nike's Air Force One shoes"
        items_four =  "a Handball Adidas shoes"
        #jacket items
        items_five = "a Hoodie"
        items_six = "a Seasonal Jacket"
        #hat
        items_seven = "a Baseball Cap"
        items_eight = "a Sombrero"
        #randomizer for the items
        shirt_options = random.choice([item_one, item_two])
        shoes_options = random.choice([items_three, items_four])
        jacket_options = random.choice([items_five, items_six])
        hat_options = random.choice([items_seven, items_eight])
    # stores locations
        store_locationOne = "Oxford Curcus High Street "
        store_locationTwo = "the Bond Street Mall "
        store_locationThree = "The local High Street nearby by house"
        # randomizer for the store location
        store_choice = random.choice([store_locationOne, store_locationTwo, store_locationThree])
    # reasons 
        reason_one = ", as I needed to buy a new T-Shirt for my gym class"
        reason_two = ", as I needed to buy a new pair of shoes for my university society meeting"
        reason_three = ", as I needed to buy a new jacket for a weekend trip"
        reason_four = ", as I needed to buy a new hat for a seasonal trip"
        # randomizer for the reason and the items
        shirt_choices = shirt_options 
        shoes_choices = shoes_options 
        jacket_choices = jacket_options 
        hat_choices = hat_options 
    #activity choices
        activity_one = "for a long walk"
        activity_two = " to have Coffee"
        activity_three = "to have Boba Tea"
        activity_four = "to have Dinner"
        # randomizer for the activity
        activity_choice = random.choice([activity_one, activity_two, activity_three, activity_four])
    # prices for the items
        # shirt prices
        shirt_price_one = 35.00
        shirt_price_two = 25.00 
        # shoes prices  
        shoes_price_one = 85.00
        shoes_price_two = 50.00
        # jacket prices
        jacket_price_one = 35.00
        jacket_price_two = 40.00
        # hat prices
        hat_price_one = 15.00
        hat_price_two = 20.00
    # randomizer for the items
        #shirt
        shirt_price_random = random.choice([shirt_price_one, shirt_price_two])
        #shoes
        shoes_price_random = random.choice([shoes_price_one, shoes_price_two])   
        #jacket
        jacket_price_random = random.choice([jacket_price_one, jacket_price_two])
        #hat
        hat_price_random = random.choice([hat_price_one, hat_price_two])
    # justify the variables
        # shirt justification
        shirt = shirt_choices + " for £ " + "{:.2f}".format(shirt_price_random) + reason_one
        # shoes justification
        shoes = shoes_choices + " for £" +  "{:.2f}".format(shoes_price_random) + reason_two
        # jacket justification
        jacket = jacket_choices + " for £ " + "{:.2f}".format(jacket_price_random) + reason_three
        # hat justification
        hat = hat_choices + " for only £" + "{:.2f}".format(hat_price_random) + reason_four
        #randomizer for the justification
        story_one_justification= random.choice([shirt, shoes, jacket, hat])
        #friends list
        friendOne = names.get_first_name()
        friendTwo = names.get_first_name()
        # randomize the friends_choice
        friends_choice = random.choice([friendOne, friendTwo])
        
# story one
        scenario_one_story = "Today, I went to " + store_choice + "with my friend " + friends_choice + ", to buy " + story_one_justification + ". After buying the item, We went out for " + activity_choice + "."
    scenario_one()
# story 2
    def scenario_two():
        global scenario_two_story
    # variables for the scenario
        # cinema locations
        cinema_locationOne = "Cinema in the West End"
        cinema_locationTwo = "Cinema in Central London"
        cinema_locationThree = "Cinema in the High Street"
        # cinema randomizer
        cinema_choice = random.choice([cinema_locationOne, cinema_locationTwo, cinema_locationThree])
        # activities for after the shopping trip
        activity_one = "a long walk"
        activity_two = "Coffee"
        activity_three = "Boba Tea"
        activity_four = "to have Dinner"
        # friends list
        friendOne = names.get_first_name()
        friendTwo = names.get_first_name()
        #friends_choice = random.choice([friendOne + friendTwo])
        # randomizer for the activity
        activity_choices = random.choice( [activity_one, activity_two, activity_three, activity_four])
        # movie list
        movie_one = "The Lion King"
        movie_two = "Doctor Strange 2 : Multiverse of Madness"
        movie_three = "Spider-Man Far From Home"
        movie_four = "Bubble"
    # randomizer for the movies
        movies_choice = random.choice([movie_one, movie_two, movie_three, movie_four])
    # prices for the cinema experience
        ticket_price = 10.00
        ticket_discount = (10.00 * 0.20)
        ticket_final = ticket_price - ticket_discount
    # prices for the food
        s_meal = 8.00
        m_meal = 10.00
        l_meal = 12.00
    # randomizer for the food
        food_choice = random.choice([s_meal, m_meal, l_meal])
    # total price
        final_price = (ticket_final + food_choice)
        final_price_format = (" " + "{:.2f}".format(final_price))
    # scenario story
        scenario_two_story = "Today, I went to watch " + movies_choice + " with my friends " + friendOne + " and " + friendTwo + "," + " in a " + cinema_choice + "." + " With the total price of the trip being £" + final_price_format + "." + "After buying the item, We went out for " + activity_choices + " on the way back home ."
       #print(scenario_two_story)
    scenario_two()
# story 3
    def scenario_three():
        global scenario_three_story
    # variables for the scenario
        # dinner options 
        pizza_choice = "The Pizza and Ice cream meal "
        american_choice = "The Burger meal "
        asian_choice = "The Ramen and Sushi meal "
        # dinner locations
        pizza_place_one = "Pizza Hut"
        pizza_place_two = "Papa John's"
        # america locations
        american_place_one = "McDonald's"
        american_place_two = "Shake Shack"
        # asian locations
        asian_place_one = "Wagamama"
        asian_place_two = "Bab Ramen"
    # prices for the dinner
    #pizza meals
        pizza_price_one= 15.00
        pizza_price_two = 20.00
        pizza_price_three = 25.00
    # american meals
        american_price_one = 10.00
        american_price_two = 15.00
        american_price_three = 20.00
    # asian meals
        asian_price_one = 10.00
        asian_price_two = 15.00
        asian_price_three = 20.00
    # variables for joining choices and location
        # pizza randomizer and location
        pizza_choice_location= random.choice([pizza_place_one, pizza_place_two])
        pizza_choice_price = random.choice([pizza_price_one, pizza_price_two, pizza_price_three])
        pizza_dinner = (pizza_choice + "at " + pizza_choice_location + " with a price of £ " + "{:.2f}".format(pizza_choice_price))
        # american randomizer and location
        american_choice_location = random.choice([american_place_one, american_place_two])
        american_choice_price = random.choice([american_price_one, american_price_two, american_price_three])
        american_dinner = (american_choice + "at " + american_choice_location + " with a price of £" + "{:.2f}".format(american_choice_price))
        # asian randomizer and location
        asian_choice_location = random.choice([asian_place_one, asian_place_two])
        asian_choice_price = random.choice([asian_price_one, asian_price_two, asian_price_three])
        asian_dinner = (asian_choice + "at " + asian_choice_location + " with a price of £ " + "{:.2f} ".format(asian_choice_price))
    # randomizer for the dinner
        dinner_choice = random.choice([pizza_dinner, american_dinner, asian_dinner])
        #print(dinner_choice)
        # friends list
        friendOne = names.get_first_name()
        friendTwo = names.get_first_name()
        #friends_choice = random.choice([friendOne, friendTwo])
        # movies list
        movie_one = "The Lion King"
        movie_two = "Moana"
        movie_three = "Spider-Man 2"
        movie_four = "Toy Story 3"
        # randomizer for the movies_choice
        movies_choice = random.choice([movie_one, movie_two, movie_three, movie_four])

    #story for the scenario
        scenario_three_story = "I invited my friends " + friendOne + " and " + friendTwo + " to dinner." + "We choose " + dinner_choice + " plus extra fees" + "." + " We watched the movie " + movies_choice + " on Disney +" + "."
        #print(scenario_three_story)
    scenario_three()
# story 4
    def scenario_four():
        global scenario_four_story
    # variables for the scenario
        # groceries list
        grocery_one = " Oat Milk "
        grocery_two = " Whole-Range Eggs "
        #grocery_three = " Wholewheat sliced Bread "
        grocery_three = " Butter "
        grocery_four = "Mozzarella Cheese "
        # grocery stores
        grocery_store_one = "Tesco "
        grocery_store_two = "Sainsbury's "
        grocery_store_three = "Asda "
        # randomizer for the grocery store
        grocery_store_choice = random.choice([grocery_store_one, grocery_store_two, grocery_store_three])
    # grocery price
        # oat milk
        grocery_price_one = 2.00
        grocery_total_one = ("1." + grocery_one + "with a price of £" + "{:.2f}".format(grocery_price_one)) # oat milk and its price
        # whole-range eggs
        grocery_price_two = 2.00
        grocery_total_two = ("2." + grocery_two + "with a price of £" + "{:.2f}".format(grocery_price_two)) # whole-range eggs and its price
        # butter
        #grocery_price_three= 1.50
        #grocery_total_three = ("3. " + grocery_four + "with a price of £" + "{:.2f}".format(grocery_price_three)) # butter and its price
        # mozzarella cheese
        grocery_price_three = 0.50
        grocery_total_three = ("4. " + grocery_four + "with a price of £" + "{:.2f}".format(grocery_price_three)) # mozzarella cheese and its price
    
      
    # grocery total
        grocery_total = (grocery_price_one + grocery_price_two + grocery_price_three)
        grocery_format = ("{:.2f}".format(grocery_total))
        #print(grocery_format)
    # story for the scenario
        scenario_four_story = "Today,I went grocery shopping on the local " + grocery_store_choice + "for basic shopping.I bought 4 items : " + grocery_total_one + "," + grocery_total_two + "," + grocery_total_three + "," + ".The total price of my groceries was £ " + grocery_format + "."
        #print(scenario_four_story)
    scenario_four()
        
    # def for randomizer for stories
    def random_story():
        global random_story_story
        random_story_story = random.choice([scenario_one_story, scenario_two_story, scenario_three_story, scenario_four_story])
        print(random_story_story)
    random_story()
        
    #twitter bot
    def twitter_bot():
    # twitter bot configurations
            consumer_key    = '############################'
            consumer_secret = '############################'
            access_token    =  '############################'
            access_token_secret = '############################'
    # twitter bot API configurations
            auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
            auth.set_access_token(access_token, access_token_secret)
    # Create API object
            api = tweepy.API(auth)
    # tweet the story
            api.update_status(random_story_story)
    twitter_bot()