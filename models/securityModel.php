<?php 
require_once('models\DBconnect.php');
class securityModel extends DBconnect {
    public function login($adminName){
        $findAdminUser = $this->db->prepare('SELECT * FROM admin WHERE (adminName = :adminName)');
        $findAdminUser->execute(['adminName' => $adminName]);
        $admin = $findAdminUser->fetch(PDO::FETCH_OBJ);
        return $admin;
    }
    public function signup($adminPassword, $adminName){
        $req = $this->db->prepare("INSERT INTO admin SET adminName = :adminName, adminPassword = :adminPassword"); 
        $req->execute(['adminName' => $adminName, 'adminPassword' => $adminPassword]);
    }
}
