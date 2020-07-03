<?php
namespace App\controllers;
use App\models\adminModel;
// require_once('classes/models/adminModel.php');
class adminController
{
    public function adminData()
    {
        $recoverUserData = new adminModel;
        $dataUser = $recoverUserData->recoverUser();
        include(getcwd() . '/views/admin.php');        
    }
    public function messageUser()
    {
        $id = $_GET['id'];
        $recoverMessage = new adminModel;
        $messageFromUser = $recoverMessage->thisMessage($id);
        include(getcwd() . '/views/adminMessage.php');        
    }
}
