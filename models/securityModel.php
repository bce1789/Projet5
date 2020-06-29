<?php 
require_once('models\DBconnect.php');
class securityModel extends DBconnect {
    public function login($userName){
        $findAdminUser = $this->db->prepare('SELECT * FROM users WHERE userName = :userName');
        $findAdminUser->execute(['userName' => $userName]);
        $admin = $findAdminUser->fetch(PDO::FETCH_OBJ);
        return $admin;
    }
    public function signup($userPassword, $userName){
        $request = $this->db->prepare('INSERT INTO users(userName, userPassword) VALUES(:userName, :userPassword)');
        $request->bindvalue(':userName', $userName);
        $request->bindvalue(':userPassword', $userPassword);
        $request->execute();
    }
}