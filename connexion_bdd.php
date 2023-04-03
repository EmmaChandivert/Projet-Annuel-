<?php
session_start(); 

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
?>