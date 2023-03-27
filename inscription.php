<?php include "connexion_bdd.php"; ?>
<doctype html>

<html>
            <head>
                <meta charset="utf-8"/>
                <title> Inscription </title>
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

                <div class="fondins" align="center">
                    <form method="post" action="connexion_bdd.php">
                        <br>
                        <label> Votre psuedo : <input type="text" id="Pseudo" name="Pseudo" required placeholder="Pseudo"> </label> <br>
                        <label> Votre nom : <input type="text" id="Nom" name="Nom" required placeholder="Nom"> </label> <br>
                        <label> Votre prénom : <input type= "text" id="Prenom" name="Prenom" required placeholder="Prénom"> </label> <br>
                        <label> Votre date de naissance : <input type="date" required placeholder="jj/mm/aaaa"> </label> <br>
                        <label> Votre adresse mail : <input type= "mail" id="Addr" name="Addr" required placeholder="Adresse mail"> </label> <br>
                        <label> Choisissez un mot de passe : <input type= "password" id="Password" name="Password" required placeholder="Mot de passe"> </label> <br>
                        <label> Confirmation du mot de passe : <input type= "password" id="ConfPassword" name="ConfPassword" required nameplaceholder="Confirmation mot de passe"> </label> <br>
                        <input type="submit" name="validation">
                    </label> <br>
                    </form>
                </div>
            </body>

    </html>