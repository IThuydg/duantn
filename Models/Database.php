<?php
class Database {



private $servername = "localhost";
private $username = "root";
private $password = "";
private $dbname = "ban_hang";
private $conn;
function __construct(){
try {
  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
  // set the PDO error mode to exception
  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
    }


    function query($sql, ...$args){
        try {
  $stmt = $this->conn->prepare($sql);
  $stmt->execute($args);

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetchAll();
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
    }
    

     function queryOne($sql, ...$args){
        try {
  $stmt = $this->conn->prepare($sql);
  $stmt->execute($args);

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetch();
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
    }
    



    
     function insert($sql, ...$args){
        try {
  $stmt = $this->conn->prepare($sql);
  return $stmt->execute($args);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
    }
    
        function __destruct(){
        $this->conn =null;
    }
}