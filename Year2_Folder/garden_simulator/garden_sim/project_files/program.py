import concurrent.futures # This will allow threading in the program
import time # This allows time features in the program

start = time.perf_counter() # this is an global variable that starts the counter

def garden_welcome(seconds): #this is the welcoming message
    print('----------------Welcome to your Garden------------------- \n') #Welcomes the User to the Garden

    time.sleep(seconds) #This counts the total time in the treads
    
    return '\nCheckbox:  Welcome Message Completed.'

    
def garden_plants(seconds): #This describes the activities
    
    print("Time to start Activities:") , 
    
    print(' -Today we are going to check current farm goods'),
    print(' ----------------------------------------------- '),

    print(' -Today we are going to plant new farm goods      ')
    print(' ------------------------------------------------')

    print(' -Today we are going to Water the new Plants ')
    print(' ------------------------------------------------')

    print(' -Today we are going to Harvest the grown plants')
    print(' ------------------------------------------------')
    print('We Currently Have:')
    print(f'Fruits    : Lemons, Grapes:')
    print(f'Veggies : Onions, Potatoes:')

    print(' ------------------------------------------------')

    print('Time to water the Plants\n')
    print('\nWatering\n')
    print('\nWatering Plants\n')
    print(' ------------------------------------------------')

    print('\nTime to Harvest the Plants\n')
    print('\nHarvesting\n')
    print('\nPlants Harversted\n')
    print('Checkbox : Harvesting step Completed')
    print('Checkbox : Water step Completed')

    time.sleep(seconds) #This counts the total time in the trea
    return 'Checkbox : Show step Completed'
    

with concurrent.futures.ThreadPoolExecutor() as executor: # This loads the threads, and links to a variable called executor
    f1 = executor.submit(garden_welcome, 1) # This is the first thread
    f2 = executor.submit(garden_plants, 1)    # This is the second thread
    
    print(f1.result()) # This loads the first thread and its content
    print(f2.result()) # This loads the second thread and its content


finish = time.perf_counter() # this is an global variable that finishes the counter

print(f'Your Visited the Garden for{round(finish-start, 2)} seconds(s)') # This prints the total time needed to perform this program

###www.youtube.com. (n.d.). Python Multiprocessing Tutorial: Run Code in Parallel Using the Multiprocessing Module.
##[online] Available at: https://www.youtube.com/watch?v=fKl2JW_qrso&t=11s [Accessed 29 Mar. 2021].

