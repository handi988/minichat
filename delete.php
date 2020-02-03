<?php
session_start();
require("include/db.php");
require("include/head.php");

$delete = $bdd->prepare("DELETE FROM users WHERE id = ?");
$delete->execute(array($_SESSION["id"]));
// header("location:index.php");
echo "votre compte a bien été supprimer";
?> 