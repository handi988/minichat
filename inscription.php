<?php
require("include/head.php");
require("include/db.php");

?>

<div class="container">
    <div class="row text-center">
        <div class="col">
            <form method="POST" action="foncinscription.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pseudo</label>
                    <input type="text" class="form-control text-center " id="exampleInputEmail1" aria-describedby="emailHelp" name = "newlogin" value="">
                    <small id="emailHelp" class="form-text text-muted" >We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control text-center" id="exampleInputPassword1" name="newmdp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Retapez votre mot de passe</label>
                    <input type="password" class="form-control text-center" id="exampleInputPassword1" name="confirmdp">
                </div>
                
                
                <button type="submit" class="btn btn-primary" name="formiscription ">Se connecter </button>
                <button type="submit" class="btn btn-primary" name="formconnexion">Annuler </button>
            </form>
        </div>
    </div>
    <?php
    require("include/footer.php")
     
    ?>
