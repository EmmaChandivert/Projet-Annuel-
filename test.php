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


// try {
//     $nom= 'nathan';
//     $id='uuuuwuuu';
    
//     echo "$nom,$id";  
    
//     $R = $bd -> PREPARE("INSERT INTO Utilisateur (Identifiant, Nom) VALUES (:id, :nom)");
    
//     $R-> bindValue(":id", $id, PDO::PARAM_STR);
//     $R-> bindValue(":nom", $nom, PDO::PARAM_STR);
    
//     $R-> execute();
// }
// catch(Exception $e){
//     die('Erreur'.$e->getMessage());    
// }

try {
    // $bouton = $_POST['bouton'];
    $bouton="A";
    
    $recherchelettre=$pdo -> prepare("SELECT * FROM Sport WHERE Initiale = :bouton");
     
    $recherchelettre-> bindParam(":bouton", $bouton);
    $recherchelettre-> execute();
     

    $resultat = $recherchelettre->fetchAll();
    foreach ($resultat as $ligne){
        echo "Nom du sport :".$ligne['NomS']."<br>";
        echo "Résumé : " . strval($ligne['Resume']) . "<br>";
        // Ajouter d'autres colonnes à afficher si nécessaire
        echo "<br>";
    }  
    }
catch(Exception $e){
    die('Erreur'.$e->getMessage());    
}

    ?> 