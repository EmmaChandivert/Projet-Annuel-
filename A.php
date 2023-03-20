<html>
    <head>
        <meta charset="utf-8"/>
        <title> A </title>
        <link rel="stylesheet" href="Index.css">
    </head>

    <body>
        <!-- titre de la page et lien vers la page d'acceuil -->
        <a href="Index.php" style = "text-decoration : none" > <h1>WIKI SPORT </h1> </a>
        
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
                <td>        
                    <h3 class="decolettre"> 
                    <strong class="lettreclic">A </strong> B C D E F G H I J K L M N O P Q R S T U V W X Y Z 
                    </h3> 
                </td>
         </tr>

            <tr>
                 <!-- case du tableau avec les resultats de la recherche-->
                <td> 
                    <article>
                    <!-- class="tabsport" border="3px" je trouve que ça fait plus joli sans tout ça  -->
                        <table align="center">
                            <tr>
                               <td rowspan="2">
                                 <img src="chat.jpg" alt="Miss teigne" height="100%" width="100%">
                                </td>
                             
                                <td>
                                    <h2><i>"Nom d'un sport" </i></h2>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>
                                        <i> "Description du sport selon les informations données dans la base de données
                                        Quam ob rem cave Catoni anteponas ne istum quidem ipsum, quem Apollo, ut ais, sapientissimum iudicavit; huius enim facta, illius dicta laudantur. De me autem, ut iam cum utroque vestrum loquar, sic habetote.
                                        Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur, an quaedam altiora meditantis iam Galli secreta susceperint scripta, qui conpertis Antiochiae gestis per minorem Armeniam lapsus Constantinopolim petit exindeque per protectores retractus artissime tenebatur.
                                        </i>
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