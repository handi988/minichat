<?php 
require("include/db.php");
require("include/head.php");
?>
<div class="container">
    <div class="row text-center">
        <div class="col">
            <form method="POST" action="connection.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pseudo</label>
                    <input type="text" class="form-control text-center " id="exampleInputEmail1" aria-describedby="emailHelp" name = "login">
                    <small id="emailHelp" class="form-text text-muted" >We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control text-center" id="exampleInputPassword1" name="mdp">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter </button>
            </form>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <a href="#">Pas en core de compte ?</a>
        </div>
    </div>
</div>
