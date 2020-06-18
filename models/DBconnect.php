<?php

class DBconnect
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=p_5', 'root', '');
    }
}
