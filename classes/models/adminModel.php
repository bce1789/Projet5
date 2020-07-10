<?php
namespace App\models;
//require_once('classes/models/DBconnect.php');
use App\models\DBconnect;
class adminModel extends DBconnect
{
    public function recoverUser(){
        $recoverData = $this->db->prepare('SELECT * FROM contact ORDER BY dateAjout DESC');
        $recoverData->execute();
        $capturedData = $recoverData->fetchAll(\PDO::FETCH_OBJ);
        return $capturedData;      
    }
    public function thisMessage($id){
        $recoverMessage = $this->db->prepare('SELECT * FROM contact WHERE id = :id');
        $recoverMessage->execute(['id' => $id]);
        $capturedMessage = $recoverMessage->fetch(\PDO::FETCH_OBJ);
        return $capturedMessage;      
    }
}

