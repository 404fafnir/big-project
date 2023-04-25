import matplotlib.pyplot as plt #Import Matplotlib module
import numpy as np #import Numpy module




Plot_Size = 100

plt.axis([0, Plot_Size, 0, Plot_Size]) #Defining plot size

How_M_Points = 3

Divisor = 2

NB_Iteration = 1000

Rand_UStartPointX = np.random.randint(0, Plot_Size, 1)

Rand_UStartPointY = np.random.randint(0, Plot_Size, 1)

StartPoint_XList = np.random.randint(0, Plot_Size, How_M_Points) #Generating list of X coordonates for starting points and assign them random values

StartPoint_YList = np.random.randint(0, Plot_Size, How_M_Points) #Generating list of Y coordonates for starting points and assign them random values


def Middle_Xcoordonates(x1, x2): #Calculate the middle X coordonates between x1 and x2
    x3 = (x1+x2)/Divisor
    return x3

def Middle_Ycoordonates(y1, y2): #Calculate the middle Y coordonates between y1 and y2
    y3 = (y1+y2)/Divisor
    return y3


List_AllDrawingPoints = [[Rand_UStartPointX, Rand_UStartPointY]]

plt.scatter(StartPoint_XList, StartPoint_YList, s=30, edgecolors='none', c='red', label = 'Random Starting Points') #Draw all the starting points
plt.scatter(Rand_UStartPointX, Rand_UStartPointY, s=25, edgecolors='black', c='red', label = 'User Starting Point') #Draw User's starting point

for i in range(NB_Iteration):

    point = np.random.randint(0, How_M_Points, 1) #Toss a "How_M_Points" sided dice

    midx = Middle_Xcoordonates(List_AllDrawingPoints[i-1][0], StartPoint_XList[point]) #Calculate the middle point between the current point and one of the starting point (chosen by the dice)
    midy = Middle_Ycoordonates(List_AllDrawingPoints[i-1][1], StartPoint_YList[point]) #Same as above but for Y

    plt.scatter(midx, midy, s=10, edgecolors='none', c='green') #Place the points on the graph
    List_AllDrawingPoints.append((midx, midy)) #Append the new middle point to the list of all points


#Just doing this to be able to put one label and not NB_Iteration numbers label
#Yes it's dirty but it works

point = np.random.randint(0, How_M_Points, 1) #Toss a "How_M_Points" sided dice

midx = Middle_Xcoordonates(List_AllDrawingPoints[i-1][0], StartPoint_XList[point]) #Calculate the middle point between the current point and one of the starting point (chosen by the dice)
midy = Middle_Ycoordonates(List_AllDrawingPoints[i-1][1], StartPoint_YList[point]) #Same as above but for Y

plt.scatter(midx, midy, s=10, edgecolors='none', c='green', label = "Points Calculated") #Place the points on the graph

plt.legend() #Show Legend
plt.savefig('test.png')
plt.close()
