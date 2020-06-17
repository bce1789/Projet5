<?php
require_once('models\DBconnect.php');

class adminModel extends DBconnect
{
    public function recoverUser(){
        $recoverData = $this->db->prepare('SELECT * FROM contact');
        $recoverData->execute();
        $capturedData = $recoverData->fetchAll(PDO::FETCH_OBJ);
        return $capturedData;      
    }
}

