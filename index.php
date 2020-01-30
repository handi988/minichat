<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
<form method = "POST" action ="resultat.php"> 
<label>pseudo  </label>
<input type="text" name="pseudo">
<label>message  </label>
<input type="text" name="message">

<!-- le bouton de type "submit" redirige vers la page mis en "action" sur ligne 10 -->
<button type ="submit"> envoyer</button>

</form>
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
// je récupère les donner de la table 
$reponces = $bdd ->query('SELECT pseudo,messages FROM prenom');

while($donner = $reponces-> fetch()){
    echo $donner['pseudo'].' : '.$donner['messages'].'</br>';
}
?>
</body>
</html>