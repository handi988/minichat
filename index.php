<?php 
require("include/head.php");
?>
    <div id="contenu"class="container text-center">
        <div class="row">
            <div class="col ">
        
                <?php 

                    require("include/db.php");
                    // je récupère les donner de la table 
                    $reponces = $bdd ->query('SELECT pseudo,messages,HOUR(send_at) AS heur , MINUTE(send_at) AS minute, SECOND(send_at) AS seconde FROM tchat');

                    while($donner=$reponces->fetch())
                    {
                        echo$donner['heur'].' : '.$donner['minute'].' : '.$donner['seconde'].' ||| '.$donner['pseudo'].' : '.$donner['messages'].'</br>';
                    }
                ?>
            </div>
        </div>    
            <form method="POST" action="resultat.php">
                <label>pseudo </label>
                <input type="text" name="pseudo">
                <label>message </label>
                <input type="text" name="message">

                <!-- le bouton de type "submit" redirige vers la page mis en "action" sur ligne 10 -->
                <button type="submit"> envoyer</button>

            </form>

    </div>
    <?php 
    require("include/footer.php");
    ?>