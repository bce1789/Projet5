<?php 
namespace App\models;
// require_once('classes/models/DBconnect.php');
use App\models\DBconnect;
class securityModel extends DBconnect {
    public function login($userName){
        $findAdminUser = $this->db->prepare('SELECT * FROM users WHERE userName = :userName');
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