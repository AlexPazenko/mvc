<?php

namespace App\Models;

use PDO;

class User extends DbConnector
{
    private $firstName;
    private $lastName;
    private $userRole;

    public function __construct()
    {
        parent::__construct();
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

