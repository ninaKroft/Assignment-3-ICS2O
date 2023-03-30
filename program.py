#Create a program that:
#Asks the user if they want a large or an xlarge pizza
#Asks the user how many toppings they want
#Calculates the total cost of the pizza with tax

inputSize = False
askPepperoni = False
askOnions = False
askPeppers = False
askMeatballs = False
toppings = int(0)
sizeCost = float(0)
topCost = float(0)
listOfI = ""

def function pizzaSize():
    print("Would you like a large pizza or an extra-large pizza? Enter 'l' for large or 'xl' for extra large.")
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

def function pepperoni():
print("Would you like to add pepperoni as a topping? Enter 'y' for yes or 'n' for no.")
while askPepperoni == False:
    answerPep = input()
    if answerPep == "y":
        toppings = toppings + 1
        askPepperoni = True
    elif answerPep == "n":
        askPepperoni = True
    else:
        print("Please enter 'y' if you want pepperoni or 'n' if you do not.")
return toppings

def function onions():
print("Would you like to add onions as a topping? Enter 'y' for yes or 'n' for no.")
while askOnions == False:
    answerOnion = input()
    if answerOnion == "y":
        toppings = toppings + 1
        listOfI = listOfI + ""
        askOnions = True
    elif answerOnion == "n":
        askOnions = True
    else:
        print("Please enter 'y' if you want onions or 'n' if you do not.")
return toppings

def function peppers():
print("Would you like to add peppers as a topping? Enter 'y' for yes or 'n' for no.")
while askPeppers == False:
    answerPep = input()
    if answerPep == "y":
        toppings = toppings + 1
        askPeppers = True
    elif answerPep == "n":
        askPeppers = True
    else:
        print("Please enter 'y' if you want peppers or 'n' if you do not.")
return toppings

def function meatballs():
print("Would you like to add meatballs as a topping? Enter 'y' for yes or 'n' for no.")
while askMeatballs == False:
    answerMB = input()
    if answerMB == "y":
        toppings = toppings + 1
        askMeatballs = True
    elif answerMB == "n":
        askMeatballs = True
    else:
        print("Please enter 'y' if you want meatballs or 'n' if you do not.")
return toppings

def function calcToppings():
    if toppings == 1:
        topCost = float(1.00)
    elif toppings == 2:
        topCost = float(1.75)
    elif toppings == 3:
        topCost = float(2.50)
    else:
        topCost = float(3.35)
return topCost

def function finalCost():

print("Welcome to SH Pizza!")
