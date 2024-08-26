<?php
use App\Core\Database;

class Home_model {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
}