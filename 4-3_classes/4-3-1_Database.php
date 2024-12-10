<?php

class Database{
    private $serverName = "localhost";
    private $username = "root";
    private $password = ""; //if you are using MAMP, password = "root"
    private $db_name = "the_company";

    protected $conn;

    public function __construct(){
        //connect $conn to database
        $this->conn = new mysqli($this->serverName, $this->username, $this->password, $this->db_name);
    

        if($this->conn->connect_error){
            die("Unable to connect to database: ".$this->conn->connect_error);
        } 
    }
}

?>