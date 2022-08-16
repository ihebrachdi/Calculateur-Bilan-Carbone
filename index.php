<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur Bilancarbone</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div>
        <img src="img/cco2.jpg" alt="co2">
    </div>
    <div class="title" style="padding-top: 50px ;">
        <h4>Calculateur Bilancarbone</h4>
    </div>
    <div class="grid-box-1">
        <div class="grid-container-0">
            <div class="title" style="padding-bottom:20px ;">
                <h1>Donnees generales</h1>
            </div>
            
            <div></div>
            <div class="input-0 box1" >
                <div></div>
                <div></div>
                <div class="sub-title">
                    <h2>Annee de repartition de </h2>
                </div>
                <div class="unit ">
                    <input  id="1" type="date"  style="height: 70%;">
                    <h2>a</h2>
                    <input  id="1" type="date"  style="height: 70%;">
                </div>

                <div class="sub-title">
                    <h2>Annee de reference </h2>
                </div>
                <div class="unit ">
                    <input  id="1" type="date"  style="height: 70%;">

                    
                </div>

                <div class="sub-title">
                    <h2>Nom de Site </h2>
                </div>
                <div class="unit ">
                    <input class="intext" id="1" type="text"  style="width: 70%;">
                    
                </div>

                <div class="sub-title">
                    <h2>Realisateur </h2>
                </div>
                <div class="unit ">
                    <input class="intext" id="1" type="text"  style="width: 70%;">
                    
                </div>
            </div>
            <div class="buttons-1">
                <button class="popbutton" >Supprimer</button>
                <button class="popbutton" >Enregistrer</button>
                <button class="popbutton" >Imprimer</button>
                <button class="popbutton"  >Quiter</button>
            </div>
            
            <div>
                <form action="window2_1.php" method="post">
                <button class="popbutton" type="submit" value="Submit"  style="width: 100%;">Passer au Scope 1</button>
                </form>
            </div>
            <div></div>
        </div>
    </div>
</body>
</html>