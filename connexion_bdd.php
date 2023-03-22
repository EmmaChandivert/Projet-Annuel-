<?php

//Pour connexion 
$dbname = 'mysql:host=localhost;dbname=echandiv;port=1591;charset=utf8'; 
$username = 'echandiv'; 
$userpassword = '!22005383!'; 

// connexion à la base de donnee
try{
    $pdo = new PDO($dbname, $username, $userpassword); 
    echo ("Vous êtes connectés"); 
}
catch (exception $e) {
    dir('Echec de la connexion : '. $e -> getMessage()); 
}

// definition des variables utiles pour le forms dinscription et verification que les variables existent bien 
$id = isset($_POST['Pseudo']) ? $_POST['Pseudo'] : '';
$nom = isset($_POST['Nom']) ? $_POST['Nom'] : '';
$prenom = isset($_POST['Prenom']) ? $_POST['Prenom'] : '';
// $daten = isset($_POST['Date']) ? $_POST['Date'] : '';
$addr = isset($_POST['Addr']) ? $_POST['Addr'] : '';
$passwordu = isset($_POST['Password']) ? $_POST['Password'] : '';
$confpassword = isset($_POST['ConfPassword']) ? $_POST['ConfPassword'] : '';


// si l'utilisateur a clique sur le bouton valider 
if(isset($_POST['validation'])){

    // execution pour le test de lajout
    // try {
    //  // test pour compter le nombre d'utilisateur avec cet id qui veut s'incrire nest pas deja dans la bdd
    //     echo("1"); 
    //     $reqins=$pdo->prepare("SELECT COUNT(*) FROM `Utilisateur` WHERE `Identifiant` =:id" );
    //     echo("2"); 

    // //     lie les valeurs 
    //     $reqins-> bindValue(":id", $id, PDO::PARAM_STR);
    //     echo("3");
    //     $reqins-> execute();
    //     echo("4");
    // }
    // catch(Exception $e){
    //     die('Erreur dans la requete d inscription'.$e->getMessage());
    // }
    // echo("5"); 
    // var_dump($reqins);
    // echo $reqins; 
    // echo("Selection OK :)");
    
    
    // // // si reqins est égale à 0 cest à dire quil y a pas de utilisateur avec ce nom
    // if ($reqins==0){
        
        // requete pour ajouter à la bdd
        try {
            $reqajout = $pdo -> PREPARE("INSERT INTO Utilisateur (Identifiant, Nom, Prenom, Addr, Mdp, Confirmation_Mdp) VALUES (:id, :nom, :prenom, :addr, :passwordu, :confpassword)");
            
            $reqajout-> bindValue(":id", $id, PDO::PARAM_STR);
            $reqajout-> bindValue(":nom", $nom, PDO::PARAM_STR);
            $reqajout-> bindValue(":prenom", $prenom, PDO::PARAM_STR);
            // $reqajout-> bindParam(":daten", $daten);
            $reqajout-> bindValue(":addr", $addr, PDO::PARAM_STR);
            $reqajout-> bindValue(":passwordu", $passwordu, PDO::PARAM_STR);
            $reqajout-> bindValue(":confpassword", $confpassword, PDO::PARAM_STR);
        
            $reqajout-> execute();
        }
        catch(Exception $e){
            die('Erreur'.$e->getMessage());    
        }

        echo("inscription ok"); 
        header("Location:Index.php"); 
    // }
    // else{
    // //     
    // // lutisateur est deja present dans la bdd donc redirection vers la page connexion
    // echo("Deja inscrit"); 
    // header('Location:Connexion.php');
        
    // }
}

// definition des variables utiles pour le forms des lettres  et verification que les variables existent bien 
// $lettre = isset($_POST['car']) ? $_POST['car'] : '';

// var_dump($lettre); 


//     if ($lettre=='A'){
//         header("Location:A.php"); 
//     }
//     else{
//      echo ("err"); 
//     }

// pour deriger vers la page des lettre
if(isset($_POST['bouton'])) {
    $bouton = $_POST['bouton'];
    $recherchelettre="SELECT * FROM Sport WHERE Initiale =$bouton";
    $resultatlettre=$pdo->query($recherchelettre); 
    // if ($resultatlettre->rowCount() > 0){
    //     while($ligne = $resultatlettre->fetch(PDO::FETCH_ASSOC)){
    //         echo "nom : " .$ligne["nom"]. "<br>"; 
    //         echo "resume : " .$ligne["resume"] ."<br>"; 
    //     }
    // }
    // else {
    //     echo "erreur"
    // }
    header('Location:lettre.php');
  }


?> 