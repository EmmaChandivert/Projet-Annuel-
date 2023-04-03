<?php include "connexion_bdd.php";

    // definition des variables utiles pour le forms dinscription et verification que les variables existent bien 
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$initiale = isset($_POST['initiale']) ? $_POST['initiale'] : '';
$resumer = isset($_POST['resume']) ? $_POST['resume'] : '';
if (isset($_POST['sportco'])) {
    // Le bouton à cocher a été coché
    $sport_co = $_POST['sportco'];
  } else {
    // Le bouton à cocher n'a pas été coché
    $sport_co = '0';
  }
  $sportind = isset($_POST['sportInd']) ? $_POST['sportInd'] : '';
  $ballon = isset($_POST['ballon']) ? $_POST['ballon'] : '0';
  $exterieur = isset($_POST['exterieur']) ? $_POST['exterieur'] : '0';
  $interieur = isset($_POST['interieur']) ? $_POST['interieur'] : '0';
  $aquatique = isset($_POST['aquatique']) ? $_POST['aquatique'] : '0';
  $danse = isset($_POST['danse']) ? $_POST['danse'] : '0';
  $relaxation = isset($_POST['relaxation']) ? $_POST['relaxation'] : '0';
  $courir = isset($_POST['courir']) ? $_POST['courir'] : '0';
  $course = isset($_POST['course']) ? $_POST['course'] : '0';
  $animaux = isset($_POST['animaux']) ? $_POST['animaux'] : '0';
  $photo = $_FILES["photo"]["tmp_name"];

// si l'utilisateur a clique sur le bouton valider 
if(isset($_POST['validation'])){

        // requete pour ajouter à la bdd
        try {
            $reqajout = $pdo -> PREPARE("INSERT INTO Sport (Initiale, NomS,Resume, Photo, SportCo, SportInd, Exterieur, Interieur, Ballon, Aquatique, Danse, Relaxation, Courir, Course, Animaux) VALUES (:initiale, :nom, :resumer,:photo, :sport_co, :sportInd, :exterieur, :interieur, :ballon, :aquatique, :danse, :relaxation, :courir, :course, :animaux)");
            
             // Lire la photo
            $image = file_get_contents($photo);

            // Exécuter la requête en liant les paramètres
            $reqajout->bindParam(':nom', $_FILES["photo"]["name"]);
            $reqajout->bindValue(":initiale", $initiale, PDO::PARAM_STR);
            $reqajout->bindValue(":nom", $nom, PDO::PARAM_STR);
            $reqajout->bindValue(":resumer", $resumer, PDO::PARAM_STR);
            $reqajout->bindValue(":sport_co", $sport_co, PDO::PARAM_INT);
            $reqajout->bindValue(":sportInd", $sportInd, PDO::PARAM_INT);
            $reqajout->bindValue(":exterieur", $exterieur, PDO::PARAM_INT) ;
            $reqajout->bindValue(":interieur",$sport_co, PDO::PARAM_INT);
            $reqajout->bindValue(":ballon", $ballon, PDO::PARAM_INT);
            $reqajout->bindValue(":aquatique", $aquatique, PDO::PARAM_INT);
            $reqajout->bindValue(":danse", $danse, PDO::PARAM_INT);
            $reqajout->bindValue(":relaxation", $relaxation, PDO::PARAM_INT);
            $reqajout->bindValue(":courir", $courir, PDO::PARAM_INT);
            $reqajout->bindValue(":course", $course, PDO::PARAM_INT);
            $reqajout->bindValue(":animaux", $animaux, PDO::PARAM_INT);
        
            $reqajout-> execute();
        }
        catch(Exception $e){
            die('Erreur'.$e->getMessage());    
        }
 
        header("Location:Index.php"); 
    }
?>

<doctype html>



<html>
    <head>
        <meta charset="utf-8"/>
        <title> Ajout </title>
        <link rel="stylesheet" href="Index.css">
    </head>

    <body>
        <a href="Index.php" class="image"> <h1>WIKI SPORT </h1> </a>
        <br>
      
        <table vertical-align="middle">
            <tr>
                <td class="fond" align="center">
                    <?php
                    $letters = range('A', 'Z');
                    foreach ($letters as $letter) {
                    echo "<a href='lettre.php?Initiale={$letter}' class='decolettre'>{$letter}</a>"."&nbsp;";
                    }
                    ?>
                </td>
                <!-- tableau pour les boutons de connexion et d'inscription -->
                <td class="fondconnexion">
                        <h5>
                            <br> 
                            <a href="connexion.php" > Connexion </a>
                            <a href="inscription.php"> Inscription</a> 
                        </h5>
                        <!-- barre de recherhce d'un sport  -->
                        <form method="post">
                            <input type="text" placeholder="Rechercher un sport">
                        </form>
                </td>
            </tr>

           
        </table>

        <div class="fondins" align="center" enctype="multipart/form-data">
                    <form method="post">
                        <br>
                        <label> Nom du sport : <input type="text" id="nom" name="nom" required placeholder="Nom"> </label> <br>
                        <label> Initiale : <input type="text" id="initiale" name="initiale" required placeholder="Initiale"> </label> <br>
                        <label> Résumé:  <input type= "text" id="resume" name="resume" row="5" required placeholder="Résumé"> </label> <br>
                        
                        <label for="sportco">Sport Collectif :</label>
                        <input type="checkbox" id="sportco" name="sportco" value="1"><br>
                        
                        <label for="sportind">Sport Individuel :</label> 
                        <input type="checkbox" id="sportind" name="sportind" value="1"> <br>
                        
                        <label for="exterieur">Praticable en Extérieur : </label>
                        <input type="checkbox" id="exterieur" name="sportI" value="exterieur"> <br>
                        
                        <label for="interieur">Praticable en Intérieur : </label><br>
                        <input type="checkbox" id="interieur" name="sportint" value="interieur">
   
                        <label for="ballon">Sport avec ballon :</label>
                        <input type="checkbox" id="ballon" name="ballon" value="1"><br>

                        <label for="aquatique">Sport Aquatique :</label>
                        <input type="checkbox" id="aquatique" name="aquatique" value="1"><br>

                        <label for="danse">Danse :</label>
                        <input type="checkbox" id="danse" name="danse" value="1"><br>

                        <label for="relaxation">Activité de relaxation :</label>
                        <input type="checkbox" id="relaxation" name="relaxation" value="1"><br>

                        <label for="courir">Courir :</label>
                        <input type="checkbox" id="courir" name="courir" value="1"><br>

                        <label for="course">Course :</label>
                        <input type="checkbox" id="course" name="course" value="1"><br>

                        <label for="animaux">Activité avec les animaux :</label>
                        <input type="checkbox" id="animaux" name="animaux" value="1"><br>
                        <input type="file" name="photo">
                        <br>

                        <input type="submit" name="validation">
                    </label> <br>
                    </form>
                </div>

   </body>

   </html>