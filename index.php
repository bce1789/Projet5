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

// if (session_status() == PHP_SESSION_NONE) {
session_start();
// }
//rooter IF ELSE
/* if (!isset($_GET['action'])) {
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
} */

// rooter  switch
$request = null;
if (isset($_GET['action'])) {
    $request = strtok($_GET['action'], '=');
}

switch ($request) {
    case null:
        $homepageController->homepage();
        break;
    case '':
        $homepageController->homepage();
        break;
    case 'home':
        $homepageController->homepage();
        break;
    case 'contact':
        $contactController->contact();
        break;
    case 'contact/create':
        $contactController->contactInfo();
        break;
    case 'admin/message':
        $adminController->messageUser();
        break;
    case 'signup':
        $securityController->signup();
        break;
    case 'signupPage':
        $securityController->signupPage();
        break;
    case 'loginPage':
        $securityController->loginPage();
        break;
    case 'login':
        $securityController->login();
        break;
    case 'logout':
        $securityController->logout();
        break;
    case 'cgu':
        $cguController->cgu();
        break;
    default:
        if (isset($_SESSION['auth']) && $_SESSION['auth']->isAdmin) {
            switch ($request) {
                case 'admin/message':
                    $adminController->messageUser();
                    break;
                case 'admin':
                    $adminController->adminData();
                    break;
            }
        } else {
            $erreurPageController->erreurPage();
            break;
        }
}
