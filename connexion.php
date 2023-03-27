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
                <a href="Index.php" style = "text-decoration : none" > <h1>WIKI SPORT </h1> </a>
                
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

                <form class="fondins" align="center">
                 <form method="post" action="connexion_bdd.php">
                        <br>
                        <label> Votre pseudo : <input type="text" id="Pseudo2" name="Pseudo2" required placeholder="Pseudo"> </label> <br>
                        <label> Votre mot de passe : <input type= "password" id="mdp" name="mdp" required placeholder="Mot de passe"> </label> <br>
                        <input type="submit" name="validation">
                    </label> <br>
                    </form>
                    </form>
                
            </body>

    </html>