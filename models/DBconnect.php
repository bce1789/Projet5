<?php
class DBconnect
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=p_5', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}