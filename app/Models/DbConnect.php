<?php
namespace App\Models;

use PDO;

class DbConnect
{
    protected $db_host = DB_HOST;
    protected $db_name = DB_NAME;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    public $db;
    public function getConnection() {
        $this->db = null;
        try {
            $this->db = new PDO("mysql:host=". $this->db_host .";dbname=". $this->db_name , $this->db_user, $this->db_pass);
            $this->db->query("SET NAMES 'utf8'");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Database connection failed: " . $exception->getMessage();
        }
        return $this->db;
    }
    
}