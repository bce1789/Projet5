<?php 
require_once('models\securityModel.php');
class securityController {

    public function loginPage(){
       include (getcwd().'/views/loginPage.php');
    }
    public function login()
    {
        if (isset($_SESSION['auth'])) {
            header('Location: /P5_benoit_coste/index.php?action=home');
            exit;
        }
        if (!empty($_POST) && !empty($_POST['adminName']) && !empty($_POST['adminPassword'])) {
            $login = new securityModel;
            $user = $login->login($_POST['adminName']);
            if ($user == null) {
                $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
            } elseif (password_verify($_POST['adminPassword'], $user->adminPassword)) {
                $_SESSION['auth'] = $user;
                $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
                header('Location: /P5_benoit_coste/index.php?action=admin');
                exit;
            } else {
                $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
            }
            header('Location: /P5_benoit_coste/index.php?action=home');
            //var_dump($_SESSION);
            exit;
        }
        header('Location: /P5_benoit_coste/index.php?action=connect');
    }
    public function logout()
    {
        unset($_SESSION['auth']);
        header('Location: /P5_benoit_coste/index.php?action=connect');
    }
    public function signupPage(){
        include (getcwd().'/views/signupPage.php');
     }
    public function signup()
    {
        if (isset($_SESSION['auth'])) {
            header('Location: /account');
            exit;
        }
        if (!empty($_POST['adminName']) && !empty($_POST['adminPassword']) && !empty($_POST['adminPassword_confirm'])) {
            $errors = array();
            if (($_POST['adminPassword']) !== ($_POST['adminPassword_confirm'])) {
                $errors['adminPassword'] = '';
                $_SESSION['flash']['danger'] = 'Les mots de passe ne correspondent pas' ;
            }
            if (empty($errors)) {
                if (($_POST['adminPassword']) === ($_POST['adminPassword_confirm'])) {
                    $adminPassword = password_hash($_POST['adminPassword'], PASSWORD_BCRYPT);
                    $signup = new securityModel;
                    $signup->signup($adminPassword, $_POST['adminName']);
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