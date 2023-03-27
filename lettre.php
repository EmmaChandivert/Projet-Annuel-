<?php include "connexion_bdd.php"; ?>

<doctype html>

<html>
    <head>
        <meta charset="utf-8"/>
        <title> A </title>
        <link rel="stylesheet" href="Index.css">
    </head>

    <body>
        <!-- titre de la page et lien vers la page d'acceuil -->
        <a href="Index.php" style = "text-decoration : none" class="image"> <h1>WIKI SPORT </h1> </a>
        
        <table  align="right" >
                <td class="fondconnexion">
                    <h5>
                        <br> 
                        <a href="connexion.php" style = "text-decoration : none" > Connexion </a> /
                        <a href="inscription.php" style = "text-decoration : none" > Inscription</a>  
                    </h5> 
                </td>
        </table> 
        
        <br><br>
        <br><br>
        
        <!-- barre de recherhce d'un sport  -->
        <Form align="right">
            <form method="post">
            <input type="text" placeholder="Rechercher un sport">
        </form> 
        
        <!-- tableau pour organiser la page  -->
        <table>
            <!-- ligne 1 -->
            <tr>
                <!-- case avec le formulaire pour la recherche d'un sport selon les criteres  --> 
                <td rowspan="2"<form class="fondcara"methode="post">
                    <h5> <strong> <u> Listes des caractéristiques :</u> </strong><br> <br>
                    
                    <input type="checkbox" name="Sport Collectif" id="Sport Collectif" > 
                    <label>Sport Collectif           </label> <br>
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
                    <input type="range" name="Popularité du sport" id="Popularité du sport " > <br>
                    </form>
             </td>


                <!-- case du tableau avec les boutons sous forme de lettre qui renvoie sur les autres pages du sites -->
                <td align="center"> 
                    <a href='lettre.php?Initiale=A' class='decolettre' > A </a> 
                    <a href='lettre.php?Initiale=B' class='decolettre' > B </a>
                    <a href='lettre.php?Initiale=C' class='decolettre' > C </a>
                    <a href='lettre.php?Initiale=D' class='decolettre' > D </a>
                    <a href='lettre.php?Initiale=E' class='decolettre' > E </a>
                    <a href='lettre.php?Initiale=F' class='decolettre' > F </a>
                    <a href='lettre.php?Initiale=G' class='decolettre' > G </a>
                    <a href='lettre.php?Initiale=H' class='decolettre' > H </a>
                    <a href='lettre.php?Initiale=I' class='decolettre' > I </a>
                    <a href='lettre.php?Initiale=J' class='decolettre' > J </a>
                    <a href='lettre.php?Initiale=K' class='decolettre' > K </a>
                    <a href='lettre.php?Initiale=L' class='decolettre' > L </a>
                    <a href='lettre.php?Initiale=M' class='decolettre' > M </a>
                    <a href='lettre.php?Initiale=N' class='decolettre' > N </a>
                    <a href='lettre.php?Initiale=O' class='decolettre' > O </a>
                    <a href='lettre.php?Initiale=P' class='decolettre' > P </a>
                    <a href='lettre.php?Initiale=Q' class='decolettre' > Q </a>
                    <a href='lettre.php?Initiale=R' class='decolettre' > R </a>
                    <a href='lettre.php?Initiale=S' class='decolettre' > S </a>
                    <a href='lettre.php?Initiale=T' class='decolettre' > T </a>
                    <a href='lettre.php?Initiale=U' class='decolettre' > U </a>
                    <a href='lettre.php?Initiale=V' class='decolettre' > V </a>
                    <a href='lettre.php?Initiale=W' class='decolettre' > W </a>
                    <a href='lettre.php?Initiale=X' class='decolettre' > X </a>
                    <a href='lettre.php?Initiale=Y' class='decolettre' > Y </a>
                    <a href='lettre.php?Initiale=Y' class='decolettre' > Z </a>
                    </td>
         </tr>

            <tr>
                 <!-- case du tableau avec les resultats de la recherche-->
                <td> 
                    <article>
                        <table>
                            <tr>
                                <td>
                                    <p align='left'>
                                    <!--  
                                    // $Initiale=$_GET['Initiale']; 
                                    // $sql="SELECT * FROM Sport WHERE Initiale = '$Initiale'"; 
                                    
                                    // echo "Les sports commençant par $Initiale sont les suivants : "; 
                                    // echo"<br>"; echo"<br>"; 
                                    // foreach($pdo->query($sql) as $ligne){
                                    // echo "<div class='nomsport'>";
                                    // echo $ligne['NomS']."<br></div>";
                                    // echo "<div class='cara_sport'>";
                                    // echo strval($ligne['Resume']) . "<br></div>";
                                    // echo "<br>";
                                    // }
                                    // ?>  -->
                                    <!-- 
                                        <?php
$Initiale = isset($_GET['Initiale']) ? $_GET['Initiale'] : ''; 
if (!empty($Initiale)) {
    // Échapper l'entrée de l'utilisateur
    $Initiale = $pdo->quote($Initiale);
    
    $stmt = $pdo->prepare("SELECT * FROM Sport WHERE Initiale = :initiale");
    $stmt->bindParam(':initiale', $Initiale);
    $stmt->execute();

    $sports = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "Les sports commençant par $Initiale sont les suivants : <br><br>"; 
    foreach ($sports as $sport) {
        echo "<div class='nomsport'>" . $sport['NomS'] . "</div>";
        echo "<div class='cara_sport'>" . strval($sport['Resume']) . "</div><br>";
    }
}
?>

                                    
                                    </p> 
                                </td> 
                            </tr>
                        </table>  
                    </article>
                </td>
            </tr>
        </table>
    </body>

</html>