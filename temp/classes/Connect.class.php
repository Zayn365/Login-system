<?php

class Connect
{
    private $host = "sql202.byetcluster.com";
    private $username = "hp_30597398";
    private $password = "12345678";
    private $db = "hp_30597398_ooplogin";

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
