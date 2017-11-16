#! /usr/bin/python

print 'Content-type: text/html'
print ''

# --- HELLO WORLD ---

print 'Hello world'



# --- VARIABLES & ARRAYS ---

print ''

age = 35

print age

pi = 3.14

print pi

name = "rob"

print name

print age / pi

number = "5"

print float(number) * pi

string = "My Name Is "

print string[0]
print string[0:5]
print string[5]

print string + name

myList = ["Rob", "Kirsten", "Tommy", "Ralphie"]

print myList
print myList[1]
print myList[2:4]

myTuple = (1, 2, 3, 4)

print myTuple
print myTuple[2]

myList[2] = 5

print myList

dict = {}
dict["dad"] = "Rob"
dict["mum"] = "Kirsten"
dict[1] = "Tommy"
dict[2] = "Ralphie"

print dict
print dict["mum"]

print dict.keys()
print dict.values()



# --- LOOPS --- 

print ''

for i in range(5, 11):
    print i
    
print "Rob"

favouriteFoods = ["Pizza", "Chocolate", "Ice Cream"]

for food in favouriteFoods:
    print "I like eating " + food + "."
    

x = 0
while x <= 10:
    print x
    x += 1
    

# Dictionary - 4 names (key) and ages (value) of people
# Loop which prints. eg. Sam is 7

ages = {}
ages["Rob"] = 35
ages["Kirsten"] = 36
ages["Tommy"] = 5
ages["Ralphie"] = 1


for age in ages:
    print age + " is " + str(ages[age])





# --- IFELSE STATEMENTS ---

print ''

name = "Kirsten"

if name == "Rob" or name == "Kirsten" :
    print "Hello " + name
else:
    print "I don't know you"

# Create a program which displays the first 50 prime numbers 2, 3, 5, 7, 11...

numberOfPrimes = 0
number = 2

while numberOfPrimes < 50:
    isPrime = True
    
    for i in range(2, number):
        if number % i == 0:
            isPrime = False
    
    if isPrime == True:
        print number
        numberOfPrimes += 1
    
        
    number += 1




# --- FUNCTIONS ---

print ''

def sayHello():
    print "Hello!"
    
sayHello()

def saySomething(something):
    print something
    
saySomething("Hi there!")

def multiplyTwoNumbers(x, y):
    return x * y

print multiplyTwoNumbers(4, 6)

# Create a function highestCommonFactor which returns the highest number that divides into two other numbers exactly

def highestCommonFactor(x, y):
    for i in range (1, x + 1):
        if x % i == 0 and y % i == 0:
            hcf = i
    return hcf

print highestCommonFactor(15, 10)

a = 5
b = 6

def addTwoNumbers():
    c = 8
    return a + b

print addTwoNumbers()

# print c  ->  Not in scope





