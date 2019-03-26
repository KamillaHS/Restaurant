<?php require_once("/../db/dbcon.php"); ?>
<?php


foreach ($getRestaurantInfo as $data) {
    $restStars = $data['Stars'];
    $restLogo = $data['Logo'];
    $restAddress = $data['Adress'];
}
