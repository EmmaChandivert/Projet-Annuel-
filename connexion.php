<?php include "connexion_bdd.php"; ?>

<doctype html>

<html>
            <head>
                <meta charset="utf-8"/>
                <title> Connexion </title>
                <link rel="stylesheet" href="Index.css">
            </head>

            <body>
                <!-- titre de la page et lien vers la page d'acceuil -->
                <a href="Index.php" style = "text-decoration : none" class="image" > <h1>WIKI SPORT </h1> </a>
                
                <!-- tableau pour les boutons de connexion et d'inscription -->
                <table  align="right" >
                        <td class="fondconnexion">
                            <h5>
                                <br> 
                                <a href="connexion.php"> Connexion </a> / 
                                <a href="inscription.php"> Inscription</a> 
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

                <form class="fondins" align="center">
                 <form method="post" action="connexion.php">
                        <br>
                        <label> Votre pseudo : <input type="text" id="Pseudo2" name="Pseudo2" required placeholder="Pseudo"> </label> <br>
                        <label> Votre mot de passe : <input type= "password" id="Mdp" name="Mdp" required placeholder="Mot de passe"> </label> <br>
                        <br>
                        <input type="submit" name="validation">
                    </label> <br>
                    </form>
                    </form>

                    <?php 
                    // Récupération des données de connexion soumises par le formulaire
                    $id = isset($_POST['Pseudo']) ? $_POST['Pseudo'] : '';
                    $mdp = isset($_POST['Mdp']) ? $_POST['Mdp'] : '';
   
                    //    Préparation de la requête SQL pour vérifier si l'utilisateur existe dans la base de données
                    $sql = "SELECT * FROM Utilisateur WHERE Identifiant = :nom AND Mdp = :mdp";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':nom', $nom);
                    $stmt->bindParam(':mdp', $mdp);
                    $stmt->execute();
                    
                    //    Vérification si l'utilisateur existe
                    if ($stmt->rowCount() > 0) {
                        // L'utilisateur existe, récupération des informations de l'utilisateur
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        // Stockage du profil et du statut dans des variables de session
                        // $_SESSION["profil"] = $row["profil"];
                        $_SESSION["Statut"] = $row["Statut"];
                        // Récupération du statut de l'utilisateur depuis la variable de session
                        $statut = $_SESSION["Statut"];
                        echo"Connexion réussie"; 
                        header("Location: Index.php");
                    } 
                    else {
                        // L'utilisateur n'existe pas, affichage d'un message d'erreur
                        if (empty($nom) || empty($mdp)) {
                            echo "";
                        } else {
                            echo "<div style='background-color: ivory; padding: 10px; text-align:center;'> Nom, prénom ou mot de passe incorrect. Veuillez vérifier vos informations et réessayer. Sinon, veuillez vous inscrire via le menu</div>"; 
                        }
                    }
                    
                    //    Fermeture de la connexion
                    //    $pdo = null;
                    //  try{

                    //    if (isset ($_POST ['validation'])) {
                        // Verifier si l'utilisateur existe avec l'identifiant
                    //     $stmt1 = $pdo->prepare('SELECT * FROM Utilisateur WHERE Identifiant =:id');
                    //     $stmt1-›execute(['id'=> $id]);
                    //     $stmt2 = $pdo-›prepare('SELECT * FROM Utilisateur WHERE Mdp = :mdp');
                    //     $stmt2-›execute(['mdp'=> $mdp]);
                    //     $user1 = $stmt1-›fetch();
                    //     $suser2 = $stmt2-›fetch();
                    //     }
                    //     echo $stmt2; 
                        
                    //     if (!$user1) {
                    //     echo "L'utilisateur n'existe pas."; 
                    //     }else {
                    //     // verifier si le mot de passe est correct
                    //     } if (!$user2) {
                    //     echo "Le mot de passe est incorrect.";
                    //     // Vous pouvez maintenant rediriger l'utilisateur vers la page de son choix 
                    //     }else {
                    //     echo "La connexion à ete réalisée avec succès";
                    //     }
                    // }
                    // catch(Exception $e){
                    //     die('Erreur'.$e->getMessage());    
                    // }
                    ?>
            </body>

    </html>