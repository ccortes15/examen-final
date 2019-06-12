<?php
class Database{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function __construct(){
        $this->servername   = 'bsjoc29n2gfuxyr4bn8l-mysql.services.clever-cloud.com';
        $this->username     = 'uniothr6evvejch8';
        $this->password     = 'gUU0enek3xPAPA8wu4gW';
        $this->dbname       = 'bsjoc29n2gfuxyr4bn8l';
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