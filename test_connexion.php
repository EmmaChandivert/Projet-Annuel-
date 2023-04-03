<?php
session_start(); ?>
<?php 
include(connexion_bdd.php);


if(isset($_GET['pdo'])){
    echo "Mot de passe ou identifiant incorrect";
}
if(isset($_POST["validation"])){
    if(isset($_POST["username"]) && isset($_POST["password"])){
       $username=htmlspecialchars($_POST["username"]); 
       $password=htmlspecialchars($_POST["password"]); 
       
       
        $reqinscrit=$pdo->prepare("SELECT * FROM Utilisateur WHERE Nom=? AND Mdp=?");
        $reqinscrit->execute(array($username,$password));
        $dejainscrit=$reqinscrit();

        if ($dejainscrit == 0) {
            header("location: Connexion.php?mvsLogin"); 
             
            echo "L'utilisateur n'existe pas, ou le mot de passe et/ou l'identifiant est erroné";
            exit();
        }   
        $_SESSION['IdUser'] = $username;
        $_SESSION['MotDePasse'] = $password;

            header("location: Main.php");	
        
    }
    else{
        echo "Veuillez renseigner les champs";
    }
}
    }
}
// Récupération des données de connexion soumises par le formulaire
$nom = $_POST["nom"];
$mdp = $_POST["mdp"];

// Préparation de la requête SQL pour vérifier si l'utilisateur existe dans la base de données

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':mdp', $mdp);
$stmt->execute();

// Vérification si l'utilisateur existe
if ($stmt->rowCount() > 0) {
    // L'utilisateur existe, récupération des informations de l'utilisateur
    $row = $stmt->fetchAll();
    // Stockage du profil et du statut dans des variables de session
    // $_SESSION["profil"] = $row["profil"];
    $_SESSION["Statut"] = $row["Statut"];
    // Récupération du statut de l'utilisateur depuis la variable de session
    $statut = $_SESSION["Statut"];
    echo "kajfongrogn"; 
    echo $row; 
    var_dump($row); 
    header("Location: Index.php");


    
} else {
    // L'utilisateur n'existe pas, affichage d'un message d'erreur
    if (empty($nom)) {
        echo "err de nom";
    } 
    if (empty($mdp)){
        echo"err de mdp"; 
    }
    else {
        echo "<div style='background-color: ivory; padding: 10px; text-align:center;'>Nom, prénom ou mot de passe incorrect. Veuillez vérifier vos informations et réessayer. Sinon, veuillez vous inscrire via le menu</div>"; 
    }
}

// Fermeture de la connexion
// $pdo = null;
?>

<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS_CONNEXION.CSS">
        <link rel="stylesheet" href="Style_menu_déroulance.css">
        <title>Test connexion</title>
    </head>
    <body>
        <div class="banniere">

                    <tr>
                        <td><h1>Le Monde Marin</h1></td>
                        <td></td>
                    </tr>
        </div>
        <header> 
            <div>
                <nav>
                    <ul>
                        <li class="deroulant"><a href="#">Menu &ensp;</a>
                            <ul class="sous">
                            <li><a href="MARINE_WORLD.php"> Page d'accueil</a></li>
                                <li><a href="Formulaire_inscription.html">Inscription</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <br>
            <br>
        </header>
        <div class="register-page">
            <form class="register-form" method="POST" action="">
                <h1>Connexion</h1>
                <br>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" required><br>
                <label for="mdp">Mot de passe :</label>
                <input type="password" name="mdp" required><br>
                <input type="submit" value="Se connecter">
            </form>
        </div>
    </body>
</html>