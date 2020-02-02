<?php
session_start();
require("include/db.php");
$message = $_POST['message'];


// je prépare la requete 
$req = $bdd->prepare("INSERT INTO tchat (logins ,messages) VALUES(?)");

// je l'excute 
$req->execute(array($_SESSION['logins'],$message));
// excute le code cette page et redirige automatiqument vers index?php
header('location:tchat.php?id='.$_SESSION["id"]);



?>
