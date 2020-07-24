<?php

namespace App\controllers;

use App\models\contactModel;

class contactController
{
    public function contact()
    {
        include(getcwd() . '/views/contact.php');
    }
    public function contactInfo()
    {
        if (isset($_POST['username'], $_POST['email'], $_POST['rgpd'], $_POST['locate'], $_POST['message']) && strlen($_POST['username']) > 0 && strlen($_POST['email']) > 0  && strlen($_POST['locate']) > 0 && strlen($_POST['message']) > 0) {
            $infos = new contactModel;
            $regex = ($_POST['email']);
            if (preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $regex)) {
                $infos->addContactInfo($_POST['username'], $_POST['email'], $_POST['locate'], $_POST['message']);
                header('location: /P5_benoit_coste/index.php?action=contact');
                $_SESSION['flash']['success'] = 'Votre message à bien été transmis';
            } else {
                $_SESSION['flash']['danger'] = 'L\'adresse mail est invalide';
                include(getcwd() . '/views/contact.php');
            }
        } else {
            $_SESSION['flash']['primary'] = 'Tous les éléments du formulaire sont requis';
            include(getcwd() . '/views/contact.php');
        }
    }
}
