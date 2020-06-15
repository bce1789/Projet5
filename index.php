<?php
require_once(getcwd() . '/controllers/homepageController.php');
require_once(getcwd() . '/controllers/contactController.php');

$homepageController = new homepageController;
$contactController = new contactController;

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
}
