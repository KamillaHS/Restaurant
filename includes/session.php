<?php
session_start();

function customer_made() {
    return isset($_SESSION['CustomerID']);
}
