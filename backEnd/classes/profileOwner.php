<?php

    class ProfileOwner
    {
        private $connection, 
                $id , 
                $fullName, 
                $email,
                $password,
                $birthDate,
                $stat, 
                $lvl; 
        
        public function     __construct($con)
        {       
            $this->connection = $con;
            $query = "SELECT * FROM users as p INNER JOIN stat as s ON p.stat = s.id ;";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            
            $this->fullName = $res [0]["fullName"]; 
            $this->id  = $res[0][ 'id'];
            $this->email = $res[0][ "email"] ; 
            $this->password = $res[0]['pasword'];
            $this->birthDate =  $res[0][ "birthDate"] ;
            $this->stat =   $res[0][ "statName"]; 
            $this->lvl =  $res[0][ "lvl"];
            
            // var_dump($res);
        } 
           
        public function     setId($id)
        {
            $this->id = $id ;
        }

        public function     getFullName()
        {
            return explode(' ', $this->fullName);
        }
        
        public function     getEmail()
        {
            return $this->email;
        }

        public function     getStat()
        {   
            return $this->stat;
        }

        public function     getFirstName()
        {
            
            return $this->getFullName()[0];
        }
        
        public function     getLastName()
        {
            return $this->getFullName()[1];
        }

        public function updateStat()
        {
            $query = "UPDATE TABLE profileOwner SET stat = :stat WHERE id = :id";
            $stmt = $this->getConnection()->prepare($query); 
            
            $params = array(
                ':stat' => $this->stat, 
                ':id' => $this->id
            );
            
            return $stmt->execute($params);
        } 

        public function     login($userName , $password)
        {   
            // compaire the date we got via the constructor with this that we have got from the login form 
            return $this->email == $userName && $this->password == $password;
        }
        
    }

?>