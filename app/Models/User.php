<?php
namespace App\Models;

use App\Models\DbConnect;
use PDO;

class User
{
    private $firstName;
    private $lastName;
    private $userRole;
    private $connection;

    public function __construct()
    {
        $db = new DbConnect();
        $this->connection = $db->getConnection();
    }

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

    public function read()
    {
        $sth = $this->connection->query("SELECT * FROM users");
        $sth->setFetchMode(PDO::FETCH_CLASS, self::class);

        return $sth->fetchAll();
    }
}

