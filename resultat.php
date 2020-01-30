<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost:3308;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$pseudo = $_POST['pseudo'];
$message = $_POST['message'];
// je prépare la requete 
$req = $bdd->prepare("INSERT INTO prenom (pseudo, messages) VALUES(?,?)");

// je l'excute 
$req->execute(array($pseudo,$message));
// excute le code cette page et redirige automatiqument vers index?php
header('location:index.php');


?>