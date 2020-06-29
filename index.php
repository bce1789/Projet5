<?php
require_once(getcwd() . '/controllers/homepageController.php');
require_once(getcwd() . '/controllers/contactController.php');
require_once(getcwd() . '/controllers/adminController.php');
require_once(getcwd() . '/controllers/securityController.php');
require_once(getcwd() . '/controllers/erreurPageController.php');

$homepageController = new homepageController;
$contactController = new contactController;
$adminController = new adminController;
$securityController = new securityController;
$erreurPageController = new erreurPageController;

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
<<<<<<< HEAD
    if ($_GET['action'] == 'admin') {
        if ($_SESSION['auth']->isAdmin) {
            $adminController->adminData();
        } else {
            $erreurPageController->erreurPage();
        }
    }
=======
>>>>>>> e188229687b6f9c802b95446880b00fb32490018
}

