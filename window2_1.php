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
                <h1>Emissions directes des sources fines de combustion</h1>
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
                    <h2>Gaz naturel</h2>
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

                <!-- column 2 -->
                <div class="sub-title">
                    <h2>Fioul Lourd</h2>
                </div>
                <div class="unit ">
                    <input type="number" id="3" class="intext" style="width: 70%;">
                    <h3>Kwh</h3>
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" id="4" class="intext" style="width: 70%;">
                    <h3>tco<sub>2</sub>/Kwh</h3>
                </div>

                <!-- column 3 -->
                <div class="sub-title">
                    <h2>Essence</h2>
                </div>
                <div class="unit ">
                    <input type="number" id="5" class="intext" style="width: 70%;">
                    <h3>Kwh</h3>
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" id="6" class="intext" style="width: 70%;">
                    <h3>tco<sub>2</sub>/Kwh</h3>
                </div>


                <!-- column 4 -->
                <div class="sub-title">
                    <h2>Diessel</h2>
                </div>
                <div class="unit ">
                    <input type="number" id="7" class="intext" style="width: 70%;">
                    <h3>Kwh</h3>
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" id="8" class="intext" style="width: 70%;">
                    <h3>tco<sub>2</sub>/Kwh</h3>
                </div>

                
            </div>
        </div>
        <div class="buttons">
            <button class="popbutton" onclick="DeleteResult(1,4)">Supprimer</button>
            <div style="width: 100px; height: 50px; ;"></div>
            <button class="popbutton" onclick="CalculateResult(1,4)">Valider</button>
        
        </div>
        <div class="result-1 box1">
            <div class="box-title">
                <h1>Emissions directes des sources fines de combustion</h1>
            </div>
            <div class="result-box">
                <div></div>
                <div></div>

                <!-- Row 1 -->
                <div class="sub-title">
                    <h2>Gaz naturel</h2>
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
                    <h2>Fioule Lourd</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l2" class="line-1"></div>
                        <h5 id="2r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>

                <!-- Row 3 -->
                <div class="sub-title">
                    <h2>Essence</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l3" class="line-1"></div>
                        <h5 id="3r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>
                <!-- Row 4 -->
                <div class="sub-title">
                    <h2>Diessel</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l4" class="line-1"></div>
                        <h5 id="4r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>
                <!-- Row 5 -->
                <div class="sub-title">
                    <h2>Total</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l5" class="line-1"></div>
                        <h5 id="5r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>

            </div>

        </div>
        <div class="input-1 box1">
            <div class="box-title">
                <h1>Emissions directes des sources mobiles de combustion</h1>
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
                    <h2>Gaz naturel</h2>
                </div>
                <div class="unit ">
                    <input class="intext" type="number" id="9" style="width: 70%;">
                    <h3>Kwh</h3>
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" class="intext" id="10" style="width: 70%;">
                    <h3>tco<sub>2</sub>/Kwh</h3>
                </div>

                <!-- column 2 -->
                <div class="sub-title">
                    <h2>Fioul Lourd</h2>
                </div>
                <div class="unit ">
                    <input type="number" class="intext" id="11" style="width: 70%;">
                    <h3>Kwh</h3>
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" class="intext" id="12" style="width: 70%;">
                    <h3>tco<sub>2</sub>/Kwh</h3>
                </div>

                <!-- column 3 -->
                <div class="sub-title">
                    <h2>Essence</h2>
                </div>
                <div class="unit ">
                    <input type="number" class="intext" id="13" style="width: 70%;">
                    <h3>Kwh</h3>
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" class="intext" id="14" style="width: 70%;">
                    <h3>tco<sub>2</sub>/Kwh</h3>
                </div>


                <!-- column 4 -->
                <div class="sub-title">
                    <h2>Diessel</h2>
                </div>
                <div class="unit ">
                    <input type="number" id="15" class="intext" style="width: 70%;">
                    <h3>Kwh</h3>
                </div>
                <div ></div>
                <div class="unit ">
                    <input type="number" id="16" class="intext" style="width: 70%;">
                    <h3>tco<sub>2</sub>/Kwh</h3>
                </div>

                
            </div>
        </div>
        <div class="buttons">
            <button class="popbutton" onclick="DeleteResult(9,4)">Supprimer</button>
            <div style="width: 100px; height: 50px; ;"></div>
            <button class="popbutton" onclick="CalculateResult(9,4)">Valider</button>
        </div>
        <div class="result-1 box1">
            <div class="box-title">
                <h1>Emissions directes des sources mobiles de combustion</h1>
            </div>
            <div class="result-box">
                <div></div>
                <div></div>

                <!-- Row 1 -->
                <div class="sub-title">
                    <h2>Gaz naturel</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l9" class="line-1"></div>
                        <h5 id="9r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>

                <!-- Row 2 -->
                <div class="sub-title">
                    <h2>Fioule Lourd</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l10" class="line-1"></div>
                        <h5 id="10r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>

                <!-- Row 3 -->
                <div class="sub-title">
                    <h2>Essence</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l11" class="line-1"></div>
                        <h5 id="11r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>
                <!-- Row 4 -->
                <div class="sub-title">
                    <h2>Diessel</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l12" class="line-1"></div>
                        <h5 id="12r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>
                <!-- Row 5 -->
                <div class="sub-title">
                    <h2>Total</h2>
                </div>
                <div class="unit ">
                    <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
                        <div id="l13" class="line-1"></div>
                        <h5 id="13r"></h5>
                    </div>

                    <h3>tco<sub>2</sub></h3>
                </div>

            </div>

        </div>
            <div></div>
            <form action="window2_2.php" method="GEt">
                <input type="hidden" id="resId" name="resultnbr" value=0 >
                <button class="popbutton round" onclick="SumTotal(1,4,9,4)" type="submit" value="Submit"  style="width: 100%;">&#8250;</button>
            </form>
            
            <div></div>
        </div>
    </div>
    
  <script src="javascript/calc.js"></script> 
</body>
</html>