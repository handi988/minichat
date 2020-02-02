<?php

require("include/db.php");
$newlogin = htmlspecialchars($_POST['newlogin']);
$newmdp =  sha1($_POST['newmdp']);
$newmdp2 = sha1($_POST['confirmdp']);

if(!empty($_POST['newlogin']) && !empty($_POST['newmdp']) && !empty($_POST['confirmdp']))
{
  
    $pseudolenght = strlen($newlogin);

    if($pseudolenght<=255)
    {
        $reqpseudo = $bdd->prepare("SELECT logins FROM users WHERE logins = ?");
        $reqpseudo->execute(array($newlogin));
        $loginexist = $reqpseudo->rowCount();
        if($loginexist == 0)
        {     
            if($newmdp == $newmdp2)
            {
                $newuser = $bdd->prepare("INSERT INTO users (logins,passwords) VALUES (?,?)");
                $newuser->execute(array($newlogin,$newmdp));
                echo "votre compte a été créer";
            }
            else
            {
            echo "les 2 mot de passe ne corresponde pas " ;    
            }
        }
        else
        {
            echo "le pseudo est déjà dans la base déjà";
        }
        
    }
    else{
        echo "256 max";
    }
     
}
// else
// {

// }