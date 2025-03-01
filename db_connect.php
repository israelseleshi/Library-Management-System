<?php
    session_start();
    class Database{
        private $host = "localhost", $username = "root", $password = "", $db_name = "library_db";
        public $conn;
        public function __construct() {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            $this->conn->connect_error && die("Connection failed: " . $this->conn->connect_error);
        }
    }
    $db = new Database();
?>