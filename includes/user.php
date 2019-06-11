<?php
    class User extends DB{
        private $telefono;
        
        public function userExists($tel, $pass){
            $query = $this->connect()->prepare()('Select * From admins Where telefono = :tel AND contraseña = :pass');
            $query->execute(['tel' => $tel, 'pass' => $pass]);

            if($query->rowCount()){
                return true;
            }
            else
            {
                return false;
            }
        }

        public function setUser($user)
        {
            $query = $this->connect()->prepare('Select * From admins')
        }
    }


?>