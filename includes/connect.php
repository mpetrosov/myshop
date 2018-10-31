<?php

// class Dbc {
    
//     private $servername;
//     private $username ;
//     private $password;
//     private $dbname;
//     private $charset;
//     public $conn;

//     public function connect(){
//         $this->servername = "localhost";
//         $this->username = "root";
//         $this->password = "Hostel@17";
//         $this->dbname = "myshop";
//         $this->charset = "utf8mb4";

//         try{
//             $dsn = "mysql:hoste=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
//             $conn = new PDO($dsn, $this->username, $this->password);
//             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             return $conn;
//         }catch(\Exception $e){
//             echo "Connetion failed: ".$e->getMessage();

//         }


//         // $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
//         // if (!$this->conn) {
//         //         die("Connection failed: " . mysqli_connect_error());
//         //     }
    
//     }
    
// }

// $db = new Dbc();
// $conn = $db->conn;


$servername = "localhost";
$username = "root";
$password = "Hostel@17";
$dbname = "myshop";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

