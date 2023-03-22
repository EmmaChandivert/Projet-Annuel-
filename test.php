<?php
//Pour connexion 
$dbname = 'mysql:host=localhost;dbname=echandiv;port=1591;charset=utf8'; 
$username = 'echandiv'; 
$userpassword = '!22005383!'; 

// connexion à la base de donnee
try{
    $bd = new PDO($dbname, $username, $userpassword); 
    echo ("Vous êtes connectés"); 
}
catch (exception $e) {
    dir('Echec de la connexion : '. $e -> getMessage()); 
}


try {
    $nom= 'nathan';
    $id='uuuuwuuu';
    
    echo "$nom,$id";  
    
    $R = $bd -> PREPARE("INSERT INTO Utilisateur (Identifiant, Nom) VALUES (:id, :nom)");
    
    $R-> bindValue(":id", $id, PDO::PARAM_STR);
    $R-> bindValue(":nom", $nom, PDO::PARAM_STR);
    
    $R-> execute();
}
catch(Exception $e){
    die('Erreur'.$e->getMessage());    
}


    ?> 