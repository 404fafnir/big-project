<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/Logo_Fafnir_icon.png">
    <title>Fafnir | Py_Chaos</title>
    <?php require "../phpimports/stylesheetimport.php" ?>
</head>

<body>

    <?php $pageinv = "../eng/en-py_chaos.php" ?>

    <div class="bg-light">
        <?php include "../phpimports/nav.php"; ?>
    </div>

    <div class="container text-center" id="firstfruits">
        <h1>Py_Chaos</h1>
        <br>
        <h3>Prémices :</h3>
        <br>
        <div class="row">
            <iframe class="col-md-6 col-12" width="560" height="315" src="https://www.youtube.com/embed/kbKtFN71Lfs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p class="text-center col-md-6 col-12">
                Fin 2017, la chaine anglophone de vulgarisation de mathématique Numberphile publie une vidéo sur un "jeu" avec la théorie du chaos. <br>
                <br>
                Et pendant que je visionnais la vidéo, je me suis rendu compte que ça avait l'air d'être un concept relativement simple à programmer. <br>
                <br>
                Et j'avais à moitié raison, le concept est simple mais il a été dur à mettre en place.
            </p>
        </div>
        <br id="rules">
        <br>
        <br>
        <h3>Les règles :</h3>
        <p>
            les règles sont simples, choisissez 3 points sur un plan que vous nommez A, B et C. <br>
            Choisissez ensuite un point ou vous voulez, ce sera votre point de départ. <br>
            <br>
            Séléctionnez ensuite aléatoirement, à l'aide d'un dé (ou autre) un des trois points <br> et créez un nouveau point à la moitié de la distance entre
            votre point précédent et celui désigné aléatoirement. <br>
            et repétez autant de fois que vous le voulez (pouvez). <br>
            <br>
            Si vous l'avez fait assez de fois, la magie se révèlera à vous ! (la réponse à la fin)
        </p>
        <br id="prog">
        <br>
        <br>
        <h3>Le programme :</h3>
        <p>
            j'ai utilisé les librairies Numpy et Matplotlib
        </p>
    </div>
    <div class="container-fluid">
        <pre><code class="python">
            import matplotlib.pyplot as plt #Import Matplotlib module
            import numpy as np #import Numpy module




            Plot_Size = int(input("what size would you want your graph to be ? : ")) #Asking for the X and Y max values
            if Plot_Size < 0:
                raise NameError("Come on mate, positives values ONLY")

            plt.axis([0, Plot_Size, 0, Plot_Size]) #Defining plot size

            print('\n')

            How_M_Points = int(input("How many random starting points would you like to generate ? (min 2 default is 3) : ")) #Asking for the number of random starting point to generate
            if How_M_Points < 2:
                raise NameError("Values below 2 are not accepted")

            print('\n')

            Divisor = float(input("What number would you like to divide by ? (The minimum default is 2) : ")) #Asking for the number they want to divise the distance by
            if Divisor <=0:
                raise NameError("Values below or equal to 0  are not accepted")

            print('\n')

            NB_Iteration = int(input("How many iteration would you like to do ? (the biggest value the best, but try to keep it reasonnable :D) : ")) #Asking for the number of iterations
            if NB_Iteration < 1:
                raise NameError("The value is too small")

            print('\n')

            print("For the next questions if you wish to choose random points, just hit [ENTER]", end = '\n')

            print('\n')

            Rand_UStartPointX = input("Choose the X coordonates for your starting point : ") #Asking for the User to choose the X coordonates of their starting point
            if Rand_UStartPointX == "":
                Rand_UStartPointX = np.random.randint(0, Plot_Size, 1)
            elif not(int(Rand_UStartPointX)):
                raise NameError("The value is not an int")
            elif int(Rand_UStartPointX) < 0 or int(Rand_UStartPointX) > Plot_Size:
                raise NameError("The value is not contain within the range of plot size you chose")

            print('\n')

            Rand_UStartPointY = input("Choose the Y coordonates for your starting point : ") #Asking for the User to choose the Y coordonates of their starting point
            if Rand_UStartPointY == "":
                Rand_UStartPointY = np.random.randint(0, Plot_Size, 1)
            elif not(int(Rand_UStartPointY)):
                raise NameError("The value is not an int")
            elif int(Rand_UStartPointY) < 0 or int(Rand_UStartPointY) > Plot_Size:
                raise NameError("The value is not contain within the range of plot size you chose")


            Rand_UStartPointX = int(Rand_UStartPointX) #Just converting the str to int to avoid any problem when calculating
            Rand_UStartPointY = int(Rand_UStartPointY)

            print('\n')

            print("Bip Boop,  Generating the plot, biiip boopiipp")



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
            plt.show() #Show the plot
        </code></pre>
    </div>
    <div class="text-center">
        <p>Et voici le résultat, un triangle de Sierpinski ! grâce a de l'aléatoire !</p>

        <img src="../img/Py_Chaos.png" alt="Triangle de Sierpinski généré grâce à mon programme" class="img-fluid">
    </div>

    <br>

    <div class="text-center">
        <h3>Vous pouvez trouver mon code sur ma page GitHub :</h3>

        <a href="https://github.com/404fafnir/Py_Chaos" target="_blank" rel="noopener noreferrer">
            <img src="../img/Github_Logo_smol.png" alt="logo GitHub" class="img-fluid">
        </a>
    </div>

    <br>

    <br>

    <br>

    <br>

    <div class="container text-center">

	<h3>Vous pouvez tester le programme en cliquant sur ce bouton</h3>

	<br>

	<form action="../python_img/python.php">
		<input type="submit" value="Run de programm">
	</form>

	<br>
		
    </div>

    <br>

    <br> 

    <?php include "../phpimports/footer.php"; ?>

    <?php require "../phpimports/script.php"; ?>

    <script src="../js/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
</body>

</html>
