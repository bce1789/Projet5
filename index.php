<?php
require_once(getcwd() . '/controllers/homepageController.php');
require_once(getcwd() . '/controllers/contactController.php');
require_once(getcwd() . '/controllers/adminController.php');

$homepageController = new homepageController;
$contactController = new contactController;
$adminController = new adminController;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_GET['action'])) {
    //if (session_status() == PHP_SESSION_NONE) {
    $homepageController->homepage();
    //session_start();
}
//} 
else {
    if ($_GET['action'] == 'contact') {
        $contactController->contact();
    }
    if ($_GET['action'] == 'contact/create') {
        $contactController->contactInfo();
    }
    if ($_GET['action'] == 'admin') {
        $adminController->adminData();
    }
}
