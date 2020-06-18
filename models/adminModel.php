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
    public function thisMessage($id){
        $recoverMessage = $this->db->prepare('SELECT * FROM contact WHERE id = :id');
        $recoverMessage->execute(['id' => $id]);
        $capturedMessage = $recoverMessage->fetch(PDO::FETCH_OBJ);
        return $capturedMessage;      
    }
}

