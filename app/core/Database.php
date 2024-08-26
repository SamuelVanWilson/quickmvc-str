<?php
namespace App\Core;

use PDO;
use PDOException;

class Database{
    private $db_host = DB_HOST;
    private $db_name = DB_NAME;
    private $db_user = DB_USER;
    private $db_pass = DB_PASS;
    private $dbh;
    private $statement;

    public function __construct() {
        $dsn = "mysql:host=$this->db_host;dbname=$this->db_name";
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->db_user, $this->db_pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}