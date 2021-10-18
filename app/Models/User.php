<?php
namespace App\Models;

use App\Models\DbConnect;
use PDO;

class User
{
    private $firstName;
    private $lastName;
    private $userRole;


    // GET METHODS
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getUserRole()
    {
        return $this->userRole;
    }

    public static function read()
    {
        $db = new DbConnect();
        $db = $db->getConnection();
        $sth = $db->query("SELECT * FROM users");
        $sth->setFetchMode(PDO::FETCH_CLASS, self::class);
        $users = $sth->fetchAll();
        return $users;
    }

}
