<?php include "connexion_bdd.php"; ?>
<doctype html>

<html>
    <head>
        <meta charset="utf-8"/>
        <title> Page sport </title>
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
        
        <?php
            session_start(); 

            if(isset($_GET['nom_sport'])) {
            $_SESSION['NomS'] = $_GET['nom_sport'];
            }
                            
            $sql="SELECT * FROM Sport WHERE NomS = '{$_SESSION['NomS']}'"; 
            ?> 

            <br><br><br>

        <table class="tabsport">
            <tr>
                <td colspan="2" align="center" class="tabsport" style="text-align:center" vertical-align="middle"> 
                <?php   
                    foreach($pdo->query($sql) as $ligne){
                    echo "<div class='nomsport'>" . $ligne['NomS'] . "<br></div>";
                    echo "<br>";
                    }
                ?> 
                </td>
            </tr>
                 
            <tr>
                <td class="tabsport">
                    <p>
                        <u>
                        Description du sport : 
                        </u>
                        <?php   
                            echo "<div class='cara_sport'>" . $ligne['Resume'] . "<br></div>";
                            echo "<br>";
                        ?> 
                    </p> 
                </td>
                <td rowspan="2"class="tabsport">
                    <u>
                    <?php
                        echo '<h3><center><img src="data:image/jpeg;base64,' . base64_encode($ligne['Photo']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3>';
                        echo "<center> Image illustrant :" . $_SESSION['NomS']. '</center>';
                    
                        ?>

                    </u>
                
                </td> 
            </tr>
            <tr>
                <td class="tabsport">
                    <u>
                    Caractéristiques du sport : 
                    </u>
                    <br>
                   
                    <?php
                    foreach($pdo->query($sql) as $ligne){
                        if ($ligne['SportCO'] == 1) {
                            echo(" &nbsp;- Sport Collectif") . "<br>"; 
                        }
                        if ($ligne['SportIND'] == 1){
                            echo(" &nbsp;- Sport Individuel"). "<br>"; 
                        }
                        if ($ligne['Exterieur']==1){
                            echo(" &nbsp;- Sport en exterieur"). "<br>"; 
                        }
                        if ($ligne['Interieur']==1){
                            echo(" &nbsp;- Sport en interieur"). "<br>"; 
                        }
                        if ($ligne['Ballon']==1){
                            echo(" &nbsp;- Sport de ballon"). "<br>"; 
                        }
                        if ($ligne['Aquatique']==1){
                            echo(" &nbsp;- Sport aquatique"). "<br>"; 
                        }
                        if ($ligne['Danse']==1){
                            echo(" &nbsp;- Danse"). "<br>"; 
                        }
                        if ($ligne['Relaxation']==1){
                            echo(" &nbsp;- Relaxation"). "<br>"; 
                        }
                        if ($ligne['Courir']==1){
                            echo(" &nbsp;- Sport de course"). "<br>"; 
                        }
                        if ($ligne['Course']==1){
                            echo(" &nbsp;- Sport de course de rapidité"). "<br>"; 
                        }
                        if ($ligne['Animaux']==1){
                            echo(" &nbsp;- Sport avec des animaux"). "<br>"; 
                        }
                    }
                
                    
                    
                    ?>
                    
                    
                </td>
            </tr>
            <tr>
                <td class="tabsport">
                    <u>
                    Voici les commentaires récents :
                    </u>
                    <?php
                    $id_sport = $_GET['nom_sport'];
                    //affichage des commentaires
                    $requete_commentaire = "SELECT * FROM Commentaire JOIN Sport ON nomSport = NomS WHERE nomSport LIKE '$id_sport' ORDER BY date_com DESC;";
                                
                    foreach ($pdo->query($requete_commentaire) as $row) {
                        echo "<p><strong>" . $row['Utilisateur'] . "</strong> le " . $row['Date_com'] . "</p>";
                        echo "<p>" . $row['Commentaire'] . "</p>";
                        }
                        
                    ?>
                    
                </td>
                <td class="tabsport">
                    <u>
                    Dernier Championnat : 
                    </u> 
                    <?php
                    $sqll="SELECT cm.* FROM Competition_mondiale cm JOIN Sport s ON cm.Sport = s.NomS WHERE s.NomS = '{$_SESSION['NomS']}'"; 
                    
                    foreach($pdo->query($sqll) as $compet){
                        echo "<br>"."Annee : &nbsp;".$compet['Annee'];
                        echo "&nbsp; Vainqueur : &nbsp;". $compet['Vainqueur'];
                        echo "<br>";
                    }
                    ?>
                </td> 
            </tr>
        </table>  
                
        <br>
        <table align="center">
            <td>
                <h2> Modification &nbsp;</h2>
            </td>
            <td>
                <h2> Suppression &nbsp; </h2>
            </td>
            <tr>

            
            <td>
                <h3>Ajouter un commentaire &nbsp; </h3>
                
                    <form method="POST">
                    <label> Votre pseudo : <input type="text" id="Pseudo" name="Pseudo" required placeholder="Pseudo"> </label> <br>
                    <label for="commentaire">Commentaire :</label> <br>
                    <textarea name="comment_post" rows="5" required></textarea><br>

                    <input type="submit" name="ajouter" value="Ajouter un commentaire">
                    </form>

                    <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ajouter'])) {
                        
                        // Récupérer les données soumises
                        $date_posted = date('Y-m-d');
                        $comment_post = $_POST['comment_post'];
                        $member_id = $_POST['Pseudo'];
                        $nom_sport = $_GET['nom_sport'];
                    
                        // Insérer les données dans la base de données avec une requête préparée
                        $requete_ins = $pdo->prepare("INSERT INTO Commentaire (nomSport, Commentaire, Utilisateur, Date_com) VALUES (:nomS, :com, :user, :date_com)");
                        $requete_ins->bindValue(":nomS", $nom_sport, PDO::PARAM_STR);
                        $requete_ins->bindValue(":com", $comment_post, PDO::PARAM_STR);
                        $requete_ins->bindValue(":user", $member_id, PDO::PARAM_STR);
                        $requete_ins->bindParam(":date_com", $date_posted);
                        $requete_ins->execute();
                    }
                    ?>
                    
            </td>
            </tr>
    </body>

</html> 
