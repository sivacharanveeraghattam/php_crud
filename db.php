<?php

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "php_crud";

    protected $conn;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) {
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function close()
    {
        return $this->conn->close;
    }
}

$db = new Database();

$connection = $db->getConnection();
