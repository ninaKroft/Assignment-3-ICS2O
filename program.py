#Create a program that:
#Asks the user if they want a large or an xlarge pizza
#Asks the user how many toppings they want
#Calculates the total cost of the pizza with tax

sizeCost = float(0)
topCost = float(0)
listOfI = ""
numToppings = int(0)

def pizzaSize():
    print("Would you like a large pizza or an extra-large pizza? Enter 'l' for large or 'xl' for extra large.")
    inputSize = False
    while inputSize == False:
        size = input()
        if size == "l":
            sizeCost = float(6.00)
            inputSize = True
        elif size == "xl":
            sizeCost = float(10.00)
            inputSize = True
        else:
            print("Please enter 'l' for a large pizza or 'xl' for an extra large pizza.")
    return sizeCost

def pepperoni():
    print("Would you like to add pepperoni as a topping? Enter 'y' for yes or 'n' for no.")
    global numToppings
    askPepperoni = False
    while askPepperoni == False:
        answerPep = input()
        if answerPep == "y":
            numToppings = numToppings + 1
            askPepperoni = True
        elif answerPep == "n":
            askPepperoni = True
        else:
            print("Please enter 'y' if you want pepperoni or 'n' if you do not.")
    return toppings

def onions():
    print("Would you like to add onions as a topping? Enter 'y' for yes or 'n' for no.")
    askOnions = False
    global numToppings
    while askOnions == False:
        answerOnion = input()
        if answerOnion == "y":
            numToppings = numToppings + 1
            listOfI = listOfI + ""
            askOnions = True
        elif answerOnion == "n":
            askOnions = True
        else:
            print("Please enter 'y' if you want onions or 'n' if you do not.")
    return toppings

def peppers():
    print("Would you like to add peppers as a topping? Enter 'y' for yes or 'n' for no.")
    askPeppers = False
    global numToppings
    while askPeppers == False:
        answerPep = input()
        if answerPep == "y":
            numToppings = numToppings + 1
            askPeppers = True
        elif answerPep == "n":
            askPeppers = True
        else:
            print("Please enter 'y' if you want peppers or 'n' if you do not.")
    return toppings

def meatballs():
    print("Would you like to add meatballs as a topping? Enter 'y' for yes or 'n' for no.")
    askMeatballs = False
    global numToppings
    while askMeatballs == False:
        answerMB = input()
        if answerMB == "y":
            numToppings = numToppings + 1
            askMeatballs = True
        elif answerMB == "n":
            askMeatballs = True
        else:
            print("Please enter 'y' if you want meatballs or 'n' if you do not.")
    return toppings

def toppings():
    pepperoni()
    onions()
    peppers()
    meatballs()
    
def calcToppings():
    toppings()
    if numToppings == 1:
        topCost = float(1.00)
    elif numToppings == 2:
        topCost = float(1.75)
    elif numToppings == 3:
        topCost = float(2.50)
    elif numToppings == 4:
        topCost = float(3.35)
    else:
        topCost = float(0)
    return topCost

def finalCost():
    finalCost = ( pizzaSize() + calcToppings()) * 1.13
    return finalCost

print("Welcome to SH Pizza!")
print("Your pizza will cost", finalCost(), "$")