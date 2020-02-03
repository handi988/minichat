<?php
session_start();
require('include/db.php');
require("include/head.php");

    //bloque la session si l'ID est modifier dans l'url
    if(isset($_SESSION['id']))
    {
        // je vais chercher le si il ya un login existant
        $raqusers= $bdd->prepare("SELECT logins , passwords FROM users WHERE id = ?");
        
        $raqusers->execute(array($_SESSION["id"]));
        $user = $raqusers->fetch();

        // on véréfie si il le nouveuas login est different de l'ancien
        if(isset($_POST['modiflogin']) && !empty($_POST['modiflogin']) && $_POST['modiflogin'] != $user["logins"])
        {
            
            $modiflogin = htmlspecialchars($_POST['modiflogin']);
            $isertpseudo = $bdd->prepare("UPDATE users SET logins = ? WHERE id =?");
            $isertpseudo->execute(array($modiflogin,$_SESSION['id']));
            header("location: tchat.php?id=".$_SESSION['id']);

        } // on vérefie l'existance 
        if(isset($_POST['updatempd']) && !empty($_POST['updatempd']) && isset($_POST['updatempd2']) && !empty($_POST['updatempd2']))
        {
            $mdp1 = sha1($_POST['updatempd']);
            $mdp2 = sha1($_POST['updatempd2']);
            if($mdp1 == $mdp2)
            {

                $updatemdp = $bdd->prepare("UPDATE users SET passwords = ? WHERE id = ?");
                $updatemdp->execute(array($mdp1,$_SESSION['id']));
                header("location: tchat.php?id=".$_SESSION['id']);

            }
            else
            {
                $msg = " vos mdp ne coresponp pas ";
            }

        }

        ?>  
<div class="container">
    <div class="row text-center">
        <div class="col">
            <h2>Editez le profil </h2>  
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pseudo</label>
                    <input type="text" class="form-control text-center " id="exampleInputEmail1" aria-describedby="emailHelp" name = "modiflogin" value="<?php echo $user["logins"];?>">
                    <small id="emailHelp" class="form-text text-muted" >We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control text-center" id="exampleInputPassword1" name="updatempd">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Retapez votre mot de passe</label>
                    <input type="password" class="form-control text-center" id="exampleInputPassword1" name="updatempd2">
                </div>
                
                
                <button type="submit" class="btn btn-primary" name="formedit">Se connecter </button>
                <button type="submit" class="btn btn-primary" name="formconnexion">Annuler </button>
            </form>
            <a href="delete.php">Supprimer le comptes</a>
            <?php if(isset($msg)) {echo $msg;}?>
        </div>
    </div>
    <?php
    }
    else { 
        echo "veuillez vous connecter";
    }
    require("include/footer.php");
    
    ?>