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

                <div class="fondins" align="center">
                    <form>
                        <br>
                        <label> Votre nom : <input type= "text" placeholder="Nom"> </label> <br>
                        <label> Votre prénom : <input type= "text" placeholder="Prénom"> </label> <br>
                        <label> Votre date de naissance : <input type="date"placeholder="jj/mm/aaaa"> </label> <br>
                        <label> Votre adresse mail : <input type= "text"placeholder="Adresse mail"> </label> <br>
                        <label> Choisissez un mot de passe : <input type= "password"placeholder="Mot de passe"> </label> <br>
                        <label> Confirmation du mot de passe : <input type= "password"placeholder="Confirmation mot de passe"> </label> <br>
                        </label> <br>
                    </form>
                </div>
            </body>

    </html>