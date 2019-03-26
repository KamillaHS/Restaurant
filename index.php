<?php
$uri = $_SERVER['REQUEST_URI'];
$url = "localhost/dbAssignments/Restaurant";

switch ($uri[0]) {
    case '/' :
        require 'frontPage.php';
        break;
    case '' :
        require 'frontPage.php';
        break;
    case '/tables' :
        require $url . '/tables.php';
        break;
    case '/booktable' :
        require __DIR__ . '/bookTable.php';
        break;
    case '/booktable2' :
        require __DIR__ . '/includes/bookingForm2.php';
        break;
    case '/booktable3' :
        require __DIR__ . '/includes/bookingForm3.php';
        break;
    case '/confirmation' :
        require __DIR__ . '/includes/bookingConfirm.php';
        break;

}
