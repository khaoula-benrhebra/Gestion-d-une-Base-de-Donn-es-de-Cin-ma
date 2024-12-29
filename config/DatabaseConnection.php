<?php

class DatabaseConnection{
   
  public function __construct(){
    $conn= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    if($conn->connect_error)//en php proc on fait !$con ms mtn en oop on utilise $conn->connect_error
    {
        die("<h1>Database Connection Failed</h1>");
    }
    // echo "Database Connected";
    return $this->conn =$conn;
  }
}