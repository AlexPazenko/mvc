<?php

namespace App\Models;



abstract class DbConnector
{
    protected $connection;

    public function __construct()
    {
        try {
            $db = new DbConnect();
            $this->connection = $db->getConnection();
        } catch(PDOException $exception) {
            throw new \Exception( "Database connection failed: " . $exception->getMessage());

        }
    }
}
