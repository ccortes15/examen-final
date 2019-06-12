<?php
class Database{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function _construct(){
        $this->servername   = 'localhost';
        $this->username     = 'id9909723_ra420';
        $this->password     = 'ra420';
        $this->dbname       = 'id9909723_login';
    }

    function connect(){
        $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            echo ("Connected.");
        }
    }
}       
?>