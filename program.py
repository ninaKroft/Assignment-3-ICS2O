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

def toppings():
    global numToppings
    for a in range(1, 5):
        complete = False
        if a == 1:
            tType = "pepperoni"
        elif a == 2:
            tType = "onions"
        elif a == 3:
            tType = "peppers"
        elif a == 4:
            tType = "meatballs"
        print("Would you like to add " + tType + " as a topping? Enter 'y' for yes or 'n' for no.")
        while complete == False:
            answer = input()
            if answer == "y":
                numToppings = numToppings + 1
                complete = True
            elif answer == "n":
                complete = True
            else:
                print("Please enter 'y' if you want " + tType + " or 'n' if you do not.")

    return numToppings
    
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

print("Welcome to SH pizza!")
print("Your pizza will cost", finalCost(), "$")