<?php 
namespace App\models;
use App\models\DBconnect;
class securityModel extends DBconnect {
    public function login($userName){
        $findAdminUser = $this->db->prepare('SELECT * FROM users WHERE userName = :userName OR userMail = :userName');
        $findAdminUser->execute(['userName' => $userName]);
        $admin = $findAdminUser->fetch(\PDO::FETCH_OBJ);
        return $admin;
    }
    public function signup($userPassword, $userName, $userMail){
        $request = $this->db->prepare('INSERT INTO users(userName, userPassword, userMail) VALUES(:userName, :userPassword, :userMail)');
        $request->bindvalue(':userName', $userName);
        $request->bindvalue(':userPassword', $userPassword);
        $request->bindvalue(':userMail', $userMail);
        $request->execute();
    }
}