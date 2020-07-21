<?php
namespace App\models;
use App\models\DBconnect;

class adminModel extends DBconnect
{
    public function recoverUser($currentPage){
        $currentPage = (int)$currentPage;
        // $count = (int)$this->db->query('SELECT COUNT(id) FROM contact')->fetch(\PDO::FETCH_NUM)[0];
        $perPage = 4;
        // $pages = ceil($count / $perPage);
        $offset = $perPage * ($currentPage - 1);
        $messageSelected = $this->db->prepare("SELECT * FROM contact ORDER BY dateAjout DESC LIMIT :offset, :perPage");
        $messageSelected->bindParam(':offset', $offset, \PDO::PARAM_INT);
        $messageSelected->bindParam(':perPage', $perPage, \PDO::PARAM_INT);
        $messageSelected->execute();  
        
        $posts = $messageSelected->fetchAll(\PDO::FETCH_OBJ);
        return $posts; 
        
    }
    public function thisMessage($id){
        $recoverMessage = $this->db->prepare('SELECT * FROM contact WHERE id = :id');
        $recoverMessage->execute(['id' => $id]);
        $capturedMessage = $recoverMessage->fetch(\PDO::FETCH_OBJ);
        return $capturedMessage;      
    }
    public function deleteThisMessage($id){
        $deleteMessage = $this->db->prepare('DELETE FROM contact WHERE id=?');
        $deleteMessage->execute(array($id));
    }
}

