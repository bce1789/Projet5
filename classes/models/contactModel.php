<?php
namespace App\models;
use App\models\DBconnect;
class contactModel extends DBconnect
{
    public function addContactInfo($username, $email, $locate, $message)
    {
        $request = $this->db->prepare('INSERT INTO contact(username, email, locate, message, dateAjout) VALUES(:username, :email, :locate, :message, NOW())');
        $request->bindvalue(':username', $username);
        $request->bindvalue(':email', $email);
        $request->bindvalue(':locate', $locate);
        $request->bindvalue(':message', $message);
        $request->execute();
    }
}