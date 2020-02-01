<?php
    require("include/db.php");

    $login = $_POST["login"];
    $mdp = $_POST["mdp"];

    

    $reponces = $bdd->query('SELECT logins,passwords FROM users');

    while($donnee = $reponces->fetch())
    {
        if($login == $donnee["logins"]){
            if($mdp == $donnee["passwords"])
            {
                header("location:tchat.php");
            }else{
                echo "mauvais mdp";
            }
        }else{
            echo "mauvais login";
        }
    }
?>