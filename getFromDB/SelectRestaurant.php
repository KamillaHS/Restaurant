<?php require_once("/../db/dbcon.php"); ?>

<?php
$dbCon = dbCon($user, $pass);
$query = $dbCon->prepare("SELECT * FROM `restaurant`");
$query->execute();
$getRestaurantInfo = $query->fetchAll();
//var_dump($query);