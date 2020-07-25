<?php 
namespace App\models;
use App\models\DBconnect;
class securityModel extends DBconnect {
    public function login($userName){
        $findUser = $this->db->prepare('SELECT * FROM users WHERE userName = :userName OR userMail = :userName');
        $findUser->execute(['userName' => $userName]);
        $user = $findUser->fetch(\PDO::FETCH_OBJ);
        return $user;
    }
    public function signup($userPassword, $userName, $userMail){
        $req = $this->db->prepare("INSERT INTO users SET userName = :userName, userPassword = :userPassword, userMail = :userMail"); 
        $req->execute(['userName' => $userName, 'userPassword' => $userPassword, 'userMail' =>$userMail]);
    }
}