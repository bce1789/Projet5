<?php
require_once('models\adminModel.php');
class adminController extends DBconnect
{
    public function adminData()
    {
        $recoverUserData = new adminModel;
        $dataUser = $recoverUserData->recoverUser();
        include(getcwd() . '/views/admin.php');        
    }
}
