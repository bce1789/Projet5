<?php

namespace App\controllers;

use App\models\adminModel;

class adminController
{
    public function adminData()
    {
        $currentPage = $_GET['page'] ?? 1;
        if (isset($currentPage) && (is_numeric($currentPage)) ){
            $perPage = 4;
            $recoverUserData = new adminModel;
            $messagePages = $recoverUserData->recoverUser($currentPage);
            if (!empty($messagePages)) {
                include(getcwd() . '/views/admin.php');
            } else {
                include(getcwd() . '/views/erreurPage.php');
            }
        } else {
            include(getcwd() . '/views/erreurPage.php');
        }
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
