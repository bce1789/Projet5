<?php
namespace App\controllers;
use App\models\adminModel;

class adminController
{
    public function adminData()
    {
        $currentPage = $_GET['page'] ?? 1;
        $perPage = 4;
        $recoverUserData = new adminModel;
        $messagePages = $recoverUserData->recoverUser($currentPage);
        include(getcwd() . '/views/admin.php');
    }
    public function messageUser()
    {
        $id = $_GET['id'];
        $recoverMessage = new adminModel;
        $messageFromUser = $recoverMessage->thisMessage($id);
        include(getcwd() . '/views/adminMessage.php');
    }
    public function deleteMessage()
    {
        $id = $_GET['id'];
        $message = new adminModel;
        $delete = $message->deleteThisMessage($id);
        header('Location: /P5_benoit_coste/index.php?action=admin');
        exit;
    }
}
