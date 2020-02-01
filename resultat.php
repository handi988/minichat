<?php
require("include/db.php");
$pseudo = $_POST['pseudo'];
$message = $_POST['message'];


// je prépare la requete 
$req = $bdd->prepare("INSERT INTO tchat (pseudo, messages) VALUES(?,?)");

// je l'excute 
$req->execute(array($pseudo,$message));
// excute le code cette page et redirige automatiqument vers index?php
header('location:index.php');



?>