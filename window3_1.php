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
    
    <div class="grid-box">
        <div class="grid-container">
        <div class="title ">
            <h4>Saisie des donnees</h4>
        </div>
        <div class="title "></div>
        <div class="title ">
            <h4>Affichage des resultats</h4>
        </div>
        <div class="input-1 box1">
            <div class="box-title">
                <h1>Emissions indirectes lies a la consomation d'electricite</h1>
            </div>
            <div class="input-grid">
                <div ></div>
                <div class="sub-title">
                    <h2>Consomation</h2>
                </div>
                <div ></div>
                <div class="sub-title">
                    <h2>Facture d'emission</h2>
                </div>
                
                <!-- column 1 -->
                <div class="sub-title">
                    <h2>Electricite</h2>
                </div>
                <div class="unit ">
                    <input class="intext" id="1" type="number" name="gaz" style="width: 70%;">
                    <h3>Kwh</h3>
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" id="2" class="intext" style="width: 70%;">
                    <h3>tco<sub>2</sub>/Kwh</h3>
                </div>

                

                
            </div>
        </div>
        <div class="buttons">
            <button class="popbutton" onclick="DeleteResult3(1,1,1)">Supprimer</button>
            <div style="width: 100px; height: 50px; ;"></div>
            <button class="popbutton" onclick="CalculateResult3(1,1,1)">Valider</button>
        
        </div>
        <div class="result-1 box1">
            <div class="box-title">
                <h1>Emissions indirectes lies a la consomation d'electricite</h1>
            </div>
            <div class="result-box">
                <div></div>
                <div></div>

                <!-- Row 1 -->
                <div class="sub-title">
                    <h2>Electricite</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l1" class="line-1"></div>
                        <h5 id="1r"></h5>
                    </div>
                    <h3>tco<sub>2</sub></h3>
                </div>

                <!-- Row 2 -->
                <div class="sub-title">
                    <h2>Total</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l2" class="line-1"></div>
                        <h5 id="2r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>

                

            </div>

        </div>
        <div class="input-1 box1">
            <div class="box-title">
                <h1>Emissions indirectes lies a la consomation du vapeur chaleur ou froid</h1>
            </div>
            <div class="input-grid">
                <div ></div>
                <div class="sub-title">
                    
                </div>
                <div ></div>
                <div class="sub-title">
                    <h2>F.E</h2>
                </div>
                
                <!-- column 1 -->
                <div class="sub-title">
                    <h2>Vapeur</h2>
                </div>
                <div class="unit ">
                    <input class="intext" type="number" id="3" style="width: 70%;">
                    
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" class="intext" id="4" style="width: 70%;">
                    
                </div>

                <!-- column 2 -->
                <div class="sub-title">
                    <h2>Chaleur</h2>
                </div>
                <div class="unit ">
                    <input type="number" class="intext" id="5" style="width: 70%;">
                    
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" class="intext" id="6" style="width: 70%;">
                    
                </div>

                <!-- column 3 -->
                <div class="sub-title">
                    <h2>Froid</h2>
                </div>
                <div class="unit ">
                    <input type="number" class="intext" id="7" style="width: 70%;">
                    
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" class="intext" id="8" style="width: 70%;">
                    
                </div>


                

                
            </div>
        </div>
        <div class="buttons">
            <button class="popbutton" onclick="DeleteResult3(3,3)">Supprimer</button>
            <div style="width: 100px; height: 50px; ;"></div>
            <button class="popbutton" onclick="CalculateResult3(3,3)">Valider</button>
        </div>
        <div class="result-1 box1">
            <div class="box-title">
                <h1>Emissions indirectes liee au vapeur chaleur ou froid</h1>
            </div>
            <div class="result-box">
                <div></div>
                <div></div>

                <!-- Row 1 -->
                <div class="sub-title">
                    <h2>Vapeur</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l3" class="line-1"></div>
                        <h5 id="3r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>

                <!-- Row 2 -->
                <div class="sub-title">
                    <h2>Chaleur</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l4" class="line-1"></div>
                        <h5 id="4r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>

                <!-- Row 3 -->
                <div class="sub-title">
                    <h2>Froid</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l5" class="line-1"></div>
                        <h5 id="5r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>
                <!-- Row 4 -->
                
                <div class="sub-title">
                    <h2>Total</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l6" class="line-1"></div>
                        <h5 id="6r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>

            </div>

        </div>
            <div class="result">
                <h1>Resultats finale du scope 2:</h1>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="lf" class="line-1" ></div>
                        <h5 id="rf"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>
            </div>
            <div></div>
            <div class="buttons-line">
            <form action="window4-1.php" method="GET">
                <input type="hidden" id="resId" name="resultnbr" value=<?php echo $_GET["resultnbr"]; ?>  >
                <button class="popbutton round" type="submit" value="Submit"  style="width: 100%;"> Passer Au Graph &#8250;</button>
            </form>

                <a href="#" class="popbutton round">Save</a>
                <a href="#" class="popbutton round">Retour</a>
            </div>
        </div>
    </div>
    
  <script src="javascript/calc.js"></script> 
</body>
</html>