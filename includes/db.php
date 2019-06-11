<?php
class Database{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function __construct(){
        $this->servername   = 'localhost';
        $this->username     = 'id9864228_ra420';
        $this->password     = '12345678';
        $this->dbname       = 'id9864228_bd_ra';
    }

    function connect(){
        $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            return $conn;
        }
    }
}       
?>