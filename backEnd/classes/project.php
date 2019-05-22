<?php
    
    include "define.php";

    class   Project extends protoType
    {

       
        private $link, 
                $realisationDate;


        public function     __construct()
        {
            $args = func_get_args();
            $num = func_num_args();

            if (method_exists($this, $f = 'init_' . $num)) {
                call_user_func_array(array($this,   $f),   $args);
            }
        }

        public function     init_1($con)
        {
            $this->con = $con;
        }

        public function     int_6( $con, $name, $type, $owner, $link, $date)
        {
            $this->setConnection($con);
            $this->name = $name;
            $this->type = $type;
            $this->owner = $owner;
            $this->link = $link;
            $this->realisationDate = $date; 
        }

        public function     add()
        {
            $sql = "INSERT INTO projects VALUES(null,:name, :type, :date, :link, :owner);";

            $stmt = $this->getConnection()->prepare($sql);
            
            $params = array(
                ':name' => $this->name , 
                ':type' => $this->type ,
                ':date' => $this->realisationDate , 
                ':link' => $this->link , 
                ':owner' => $this->owner
            );
            if( $this->validate() ){
                return $stmt->execute($params);
            }
            return false;   
        }

        public function     delete()
        {
            $sql = "DELETE FROM projects WHERE id = :id";
            $stmt = $this->getConnection()->prepare($sql);

            $params = array(
                ':id' => $this->getId()
            );

            return $stmt->execute($params);
        }

        public function     count()
        {
            $sql = "SELECT count(*) as c FROM projects;";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            return $res['c'];
        }

        public function     getProjects()
        {
            $sql = "SELECT * from projects ; "; 
            $stmt = $this->con->prepare($sql); 
            $stmt->execute(); 
                    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

        

        public function     validate()
        {
            if(!empty($this->name) && !empty($this->type) && !empty($this->realisationDate) && !empty($this->link) && !empty($this->owner) )
            {
                if ( preg_match( "/^[0-9]{4}\/(0[1-9]|1[0-2])\/(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->realisationDate))
                {
                    return true ;
                }
            }
            return false;
        }
    }

?>