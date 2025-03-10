<?php
class DBVezerlo(){
    private $conn = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "oscar";

    function __construct()
    {
        $conn = $this->connectDB();
        if (!empty($conn)){
            $this->conn;
        }
    }

    function connectDB(){
        try{
            $this->conn new PDO("mysqli:host($this->host);
            dbname={$this->database};charset=utf8",
            $this->user, $this->password);
        }
    }
}