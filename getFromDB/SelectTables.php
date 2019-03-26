<?php
$dbCon = dbCon($user, $pass);
$query = $dbCon->prepare("SELECT * FROM `tables`");
$query->execute();
$getTables = $query->fetchAll();
//var_dump($query);