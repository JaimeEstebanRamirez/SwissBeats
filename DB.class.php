<?php

class DB{
    private $dbHost     = "groupswitzerland-mysqldb.mysql.database.azure.com";
    private $dbUsername = "mydbuser@groupswitzerland-mysqldb";
    private $dbPassword = "@Italy2018";
    private $dbName     = "groupswitzerland-mysqldb";
    
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
}