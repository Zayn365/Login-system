<?php

class Connect
{
    private $host = "localhost";
    private $username = "root";
    private $password = "root";
    private $db = "ooplogin";

     function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
