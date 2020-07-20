<?php
use App\controllers\cguController;
use App\controllers\contactController;
use App\controllers\homepageController;
use App\controllers\securityController;
use App\controllers\adminController;
use App\controllers\erreurPageController;
require 'vendor/autoload.php';
$homepageController = new homepageController;
$contactController = new contactController;
$adminController = new adminController;
$securityController = new securityController;
$erreurPageController = new erreurPageController;
$cguController = new cguController;
session_start();

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
                case 'admin/message/delete':
                    $adminController->deleteMessage();
                    break;
                case 'admin':
                    $adminController->adminData();
                    break;   
                default:
                $erreurPageController->erreurPage();       
            } 
        } 
}
