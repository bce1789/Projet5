<?php
use App\controllers\cguController;
use App\controllers\contactController;
use App\controllers\homepageController;
use App\controllers\securityController;
use App\controllers\adminController;
use App\controllers\erreurPageController;
require 'vendor/autoload.php';
/* require_once(getcwd() . '/classes/controllers/homepageController.php'); */
// require_once(getcwd() . '/classes/controllers/contactController.php');
// require_once(getcwd() . '/classes/controllers/adminController.php');
// require_once(getcwd() . '/classes/controllers/securityController.php');
// require_once(getcwd() . '/classes/controllers/erreurPageController.php');
// require_once(getcwd() . '/classes/controllers/cguController.php');

$homepageController = new homepageController;
$contactController = new contactController;
$adminController = new adminController;
$securityController = new securityController;
$erreurPageController = new erreurPageController;
$cguController = new cguController;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_GET['action'])) {
    $homepageController->homepage();
} else {
    if ($_GET['action'] == 'home') {
        $homepageController->homepage();
    }
    if ($_GET['action'] == 'contact') {
        $contactController->contact();
    }
    if ($_GET['action'] == 'contact/create') {
        $contactController->contactInfo();
    }
    if ($_GET['action'] == 'admin/message') {
        $adminController->messageUser();
    }
    if ($_GET['action'] == 'signup') {
        $securityController->signup();
    }
    if ($_GET['action'] == 'signupPage') {
        $securityController->signupPage();
    }
    if ($_GET['action'] == 'loginPage') {
        $securityController->loginPage();
    }
    if ($_GET['action'] == 'login') {
        $securityController->login();
    }
    if ($_GET['action'] == 'logout') {
        $securityController->logout();
    }
    if ($_GET['action'] == 'cgu') {
        $cguController->cgu();
    }
    //Gestion des erreurs URL
    if (empty($_GET['action'])) {
        $erreurPageController->erreurPage();
    }
    //Gestion des erreurs URL
    //admin
    if ($_GET['action'] == 'admin/message') {
        if ($_SESSION['auth']->isAdmin) {
            $adminController->messageUser();
        } else {
            $erreurPageController->erreurPage();
        }
    } 
    if ($_GET['action'] == 'admin') {
        if ($_SESSION['auth']->isAdmin) {
            $adminController->adminData();
        } else {
            $erreurPageController->erreurPage();
        }
    }
    //admin
}
