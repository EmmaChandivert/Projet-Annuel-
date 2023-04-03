<?php include "connexion_bdd.php"; ?>

<doctype html>

<html>
    <head>
        <meta charset="utf-8"/>
        <title> Resultats par lettre </title>
        <link rel="stylesheet" href="Index.css">
    </head>

    <body>
        <!-- titre de la page et lien vers la page d'acceuil -->
        <a href="Index.php" style = "text-decoration : none" class="image"> <h1>WIKI SPORT </h1> </a>
        
        <table >
                <!-- ligne 1 -->
                <tr>
                <td colspan="2" class="fond">
                </td>
                <!-- tableau pour les boutons de connexion et d'inscription -->
                <td class="fondconnexion">
                        <h5>
                            <br> 
                            <a href="connexion.php" style = "text-decoration : none" > Connexion </a> /
                            <a href="inscription.php" style = "text-decoration : none" > Inscription</a> 
                        </h5>
                        <!-- barre de recherhce d'un sport  -->
                        <form method="post">
                            <input type="text" placeholder="Rechercher un sport">
                        </form>
                </td>
                </tr>
                <tr>
                    <!-- case avec le formulaire pour la recherche d'un sport selon les criteres  -->
                    <td rowspan="2"<form class="fondcara"methode="post">
                        <h5> <strong> <u> Listes des caractéristiques </u> </strong><br> <br>

                        <input type="checkbox" name="Sport Collectif" id="Sport Collectif" > 
                        <label>Sport Collectif </label> <br>
                        <input type="checkbox" name="Sport Individuel" id="Sport Individuel" > 
                        <label>Sport Individuel      </label> <br>
                        <input type="checkbox" name="Sport Intérieur" id="Sport Intérieur" > 
                        <label>Sport Intérieur       </label> <br>
                        <input type="checkbox" name="Sport Extérieur" id="Sport Extérieur" > 
                        <label>Sport Extérieur       </label> <br>
                        <input type="checkbox" name="Sport de Ballon" id="Sport de Ballon" > 
                        <label>Sport de Ballon       </label> <br>
                        <input  type="checkbox" name=" Sport de Rapidité" id=" Sport de Rapidité" > 
                        <label> Sport de Rapidité    </label> <br>
                        <input type="checkbox" name=" Sport avec Animaux" id=" Sport avec Animaux" > 
                        <label> Sport avec Animaux    </label> <br>
                        <input type="checkbox" name="Sport Aquatique" id="Sport Aquatique " > 
                        <label>Sport Aquatique       </label><br>
                        <input type="checkbox" name=" Sport de Course   " id=" Sport de Course   " > 
                        <label> Sport de Course    </label> <br>
                        <input type="checkbox" name=" Danse " id=" Danse " > 
                        <label> Danse                </label> <br>
                        <input type="checkbox" name=" Relaxation  " id=" Relaxation  " > 
                        <label> Relaxation   </label> <br> <br>
                        <label>Popularité du sport   </label>
                        <input type="range" name="Popularité du sport" id="Popularité du sport " > <br> <br>
                        <input type="submit" name="validation" align="middle">
                        </form> 
                    </td>

                    <!-- case du tableau avec les boutons sous forme de lettre qui renvoie sur les autres pages du sites -->
                    <td align="center" colspan="2"> 
                    <?php
                    $letters = range('A', 'Z');
                    foreach ($letters as $letter) {
                    echo "<a href='lettre.php?Initiale={$letter}' class='decolettre'>{$letter}</a>"."&nbsp;";
                    }
                    ?>
                    </td>
                </tr>


            <tr>
                 <!-- case du tableau avec les resultats de la recherche-->
                <td colspan="2"> 
                    <p align='left' align="top">
                        <?php 
                            $Initiale=$_GET['Initiale']; 
                            $sql="SELECT * FROM Sport WHERE Initiale = '$Initiale'"; 
                                                
                            echo "&nbsp; Les sports commençant par $Initiale sont les suivants : "; 
                            echo"<br>"; echo"<br>"; 

                            foreach($pdo->query($sql) as $ligne){
                            $NomS = $ligne['NomS'];
                            echo "<div class='nomsport'><a href='page_sport.php?nom_sport=".$NomS."&init_session=1' style='text-decoration:none;'>" . $NomS . "</a><br><br></div>";
                            
                            echo "<div class='cara_sport'>";
                            echo strval($ligne['Resume'])."<br></div>";
                            echo "<br>";
                            }   
                        ?> 
                    </p> 
                </td> 
            </tr>
        </table>  
                    
    </body>

</html>