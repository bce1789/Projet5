<?php
include('models\contactModel.php');
class contactController
{
    public function contact()
    {
        include(getcwd() . '/views/contact.php');
    }
    public function contactInfo()
    {
        if (isset($_POST['username'], $_POST['email'], $_POST['locate'], $_POST['message'])) {
            $infos = new contactModel;
            $infos->addContactInfo($_POST['username'], $_POST['email'], $_POST['locate'], $_POST['message']);
            header('location: /P5_benoit_coste/index.php?action=contact');
            $_SESSION['flash']['success'] = 'Votre message à bien été transmis';
        } else {
            $_SESSION['flash']['primary'] = 'Tous les éléments du formulaire sont requis';
        }
    }
}
