<?php
namespace App\models;
class DBconnect
{
    public function __construct()
    {
        $this->db = new \PDO('mysql:host=localhost;dbname=p_5', 'root', '');
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}

/* 
PDO pour l'hebergeur 1&1
USE PDO;
class DBconnect
{
protected $db;
public function __construct() {
    try {
            $dbName = '******';
            $host = '******';
            $utilisateur = '******';
            $motDePasse = '******';
            $port='*****';
            $dns = 'mysql:host='.$host .';dbname='.$dbName.';port='.$port;
            $this->db = new PDO( $dns, $utilisateur, $motDePasse );
          } catch ( Exception $e ) {
            echo "Connection à la BDD impossible : ", $e->getMessage();
            die();
          }
	}
} */
