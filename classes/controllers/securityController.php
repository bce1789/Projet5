<?php

namespace App\controllers;

use App\models\securityModel;

class securityController
{
    public function loginPage()
    {
        include(getcwd() . '/views/loginPage.php');
    }
    public function login()
    {
        if (isset($_SESSION['auth'])) {
            header('Location: /P5_benoit_coste/index.php?action=home');
            exit;
        }
        if (!empty($_POST) && !empty($_POST['userName']) && !empty($_POST['userPassword'])) {
            $login = new securityModel;
            $user = $login->login($_POST['userName']);
            if ($user == null) {
                $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrect';
            } elseif (password_verify($_POST['userPassword'], $user->userPassword)) {
                $_SESSION['auth'] = $user;
                $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
                if (!isset($_SESSION['auth']->isAdmin)) {
                    header('Location: /P5_benoit_coste/index.php?action=home');
                    exit;
                } else {
                    header('Location: /P5_benoit_coste/index.php?action=admin');
                    exit;
                }
            } else {
                $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
            }
        }
        header('Location: /P5_benoit_coste/index.php?action=loginPage');
    }
    public function logout()
    {
        unset($_SESSION['auth']);
        header('Location: /P5_benoit_coste/index.php?action=home');
    }
    public function signupPage()
    {
        include(getcwd() . '/views/signupPage.php');
    }
    public function signup()
    {
        if (isset($_SESSION['auth'])) {
            header('Location: /P5_benoit_coste/index.php?action=home');
            exit;
        }
        if (!empty($_POST['userName']) && !empty($_POST['userPassword']) && !empty($_POST['userMail']) && !empty($_POST['userPassword_confirm'])) {
            $errors = array();
            $regex = ($_POST['userMail']);
            $login = new securityModel;
            $user = $login->login($_POST['userName']);
            if ($user) {
                $errors['username'] = '';
                $_SESSION['flash']['danger'] = 'Ce Nom/Pseudo est déjà pris' ;
            }
            $user = $login->login($_POST['userMail']);
            if ($user) {
                $errors['email'] = '';
                $_SESSION['flash']['danger'] = 'Cet Email est déjà utilisé' ;
            }
            if (($_POST['userPassword']) !== ($_POST['userPassword_confirm'])) {
                $errors['userPassword'] = '';
                $_SESSION['flash']['danger'] = 'Les mots de passe ne correspondent pas';
            }
            if (!preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $regex)) {
                $errors['userMail'] = '';
                $_SESSION['flash']['danger'] = 'L\'adresse eMail est invalide';
            }
            if (empty($errors)) {
                if (($_POST['userPassword']) === ($_POST['userPassword_confirm'])) {
                    $userPassword = password_hash($_POST['userPassword'], PASSWORD_BCRYPT);
                    $signup = new securityModel;
                    $signup->signup($userPassword, $_POST['userName'], $_POST['userMail']);
                    $_SESSION['flash']['success'] = 'Votre compte à bien été crée';
                    header('Location: /P5_benoit_coste/index.php?action=loginPage');
                    exit;
                }
            }
        } else {
            $_SESSION['flash']['primary'] = 'Tous les éléments du formulaire sont requis';
        }
        header('Location: /P5_benoit_coste/index.php?action=signupPage');
    }
}
