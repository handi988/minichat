<?php
session_start();

    require("include/db.php");

   
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];
        if(!empty($login) AND !empty($mdp)){
            $reponse =$bdd->prepare("SELECT id,logins,passwords FROM users WHERE logins = ? AND passwords = ?");
            $reponse->execute(array($login,$mdp));
            $userexist = $reponse->rowCount();
            if($userexist == 1)
            {
                $userinfo = $reponse->fetch();
                $_SESSION["id"] = $userinfo["id"];
                $_SESSION["logins"] = $userinfo["logins"];
                $_SESSION["password"] = $userinfo["passwords"];
                header("location:tchat.php?id=".$_SESSION["id"]);
               
            }else
            {
                echo "mauvais identifiant";
            }
        }else{
            echo "remplir les champs";
        }
    
   
   