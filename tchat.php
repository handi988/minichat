<?php 
session_start();
require("include/db.php");
require("include/head.php");
if(isset($_GET['id']) && $_GET["id"] > 0)
{
    $getid = intval($_GET["id"]);
    $reponse = $bdd->prepare("SELECT id,logins FROM users WHERE id= ?" );
    $reponse->execute(array($getid));
    $userinfo = $reponse->fetch();
    if(isset($_SESSION["id"]) && $userinfo["id"] == $_SESSION['id'])
    {
?>

    <div id="contenu"class="container text-center">
        <div class="row">
            <div class="col ">
        
                <?php 

                   
                    // je récupère les donner de la table 
                    $reponces = $bdd->query('SELECT users.id ,logins, messages  FROM users  JOIN tchat ON users.id = tchat.users_id');

                    while($donner=$reponces->fetch())
                    {
                        
                        echo $donner['logins'].' : '.$donner['messages']. '</br>';
                    }
                ?>
            </div>
        </div>
        <div class="row mt">
            <div class="col">
            <form method="POST" action="resultat.php">
               <p><?php echo $userinfo['logins'];?>
                <label>message </label>
                <input type="text" name="message">
                <button type="submit" class="mt-2"> envoyer</button>
            </div>
        </div>  
            </form>
            <div class="row">
                <div class="col">                
                <a href="deconnexion.php">Editer le profil</a>
                </div> 
            </div>

    </div>
    <?php
    }else
    {
        echo "vruillez vous connectez";
    }
    };
    require("include/footer.php");

    ?>