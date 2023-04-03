<?php 
include "connexion_bdd.php";
session_start(); 

if(isset($_GET['nom_sport'])) {
    $_SESSION['NomS'] = $_GET['nom_sport'];
}

// si l'utilisateur a cliqué sur le bouton de validation de suppression
if(isset($_POST['validation'])){
    echo "ahahahaha1";
    // Récupération de l'id du sport à supprimer
    $nom_sport = $_SESSION['NomS'];
    echo "ahahahaha2";
    try {
        // Requête de suppression
        $sql = "DELETE FROM Sport WHERE NomS = :nom_sport";  
            echo "ahahahahah3";
        // Préparation de la requête
        $stmt = $pdo->prepare($sql);
        echo "ahahahaha4";
        // Remplacement des paramètres par les 
         $stmt->bindParam(':nom_sport', $nom_sport);
         echo"agahhahaahah5";
        // Exécution de la requête
        $stmt->execute();
        echo "ahahahahaha6";
        // Affichage d'un message de succès
        echo "Suppression réussie !";
        echo "ahahahahaah7";
        header("Location: Index.php"); // Redirection vers la page d'accueil après la suppression
        exit(); // Fin de l'exécution du script après la redirection
    }
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Suppression </title>
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
            <td class="fondconnexion">
                <h5>
                    <br> 
                    <a href="connexion.php" > Connexion </a>
                    <a href="inscription.php"> Inscription</a> 
                </h5>
                <!-- Formulaire pour la recherche d'un sport  -->
                <form method="post">
                    <input type="text" placeholder="Rechercher un sport">
                </form>
            </td>
        </tr>
    </table>

    <!-- Formulaire de confirmation de suppression -->
    <form method="post">
        <h3>Confirmez-vous la suppression du sport <?php echo $_SESSION['NomS']; ?> ?</h3>
        <input type="hidden" name="id_sport" value="<?php echo $_SESSION['IdSport']; ?>">
        <input type="submit" name="validation" value="Oui">
        <a href="Index.php">Non</a>
    </form>
</body>
</html>
