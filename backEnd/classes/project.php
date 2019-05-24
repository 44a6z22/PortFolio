<?php
    
    include "define.php";

    class   Project 
    {

        private $con,
            $id,
            $type,
            $owner,
            $name,
            $link,
            $realisationDate;


        public function     setId($id)
        {
            $this->id = $id;
        }
        public function     getId()
        {
            return $this->id;
        }
        // setters

        public function     setConnection($con)
        {
            $this->con = $con;
        }
        public function     setName($name)
        {
            $this->name = $name;
        }
        public function     setType($ty)
        {
            $this->type = $ty;
        }
        public function     setOwner($owner)
        {
            $this->owner = $owner;
        }
        public function     setDate($date)
        {
            $this->realisationDate = $date;
        }
        public function     setLink($link)
        {
            $this->link = $link;
        }


        //getters
        public function     getConnection()
        {
            return $this->con;
        }
        public function     getName()
        {
            return $this->name;
        }
        public function     getType()
        {
            return $this->type;
        }
        public function     getOwner()
        {
            return $this->owner;
        }
        public function     getDate()
        {
            return $this->realisationDate;
        }

        public function     getLink()
        {
            return $this->link;
        }

        public function     __construct()
        {
            $args = func_get_args();
            $num = func_num_args();

            if (method_exists($this, $f = 'init_' . $num)) {
                call_user_func_array(array($this,   $f),   $args);
            }
        }

        public function init_0()
        {

        }

        public function     init_1($con)
        {
            $this->con = $con;
        }

        public function     int_6($con, $name, $type, $owner, $link, $date)
        {
            $this->con =$con;
            $this->name = $name;
            $this->type = $type;
            $this->owner= $owner;
            $this->link = $link;
            $this->realisationDate = $date; 
        }

        public function     add()
        {
            $sql = "INSERT INTO projects VALUES(null,:name, :type, :date, :link, :owner);";

            $stmt = $this->getConnection()->prepare($sql);
            
            $params = array(
                ':name' => $this->getName() , 
                ':type' => $this->getType() ,
                ':date' => $this->getDate() , 
                ':link' => $this->getLink() , 
                ':owner' => $this->getOwner()
            );
            // if( $this->validate() ){
                
                return $stmt->execute($params);
            // }
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
            $stmt = $this->getConnection()->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            return $res['c'];
        }

        public function     getProjects()
        {
            $sql = "SELECT * from projects ; ";
            $stmt = $this->getConnection()->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function     getProject()
        {
            $sql = "SELECT * from projects  WHERE id= :id; ";
            $stmt = $this->getConnection()->prepare($sql);
            $stmt->execute(array(
                ':id'=> $this->getId()
            ));

            $r =  $stmt->fetch(PDO::FETCH_ASSOC);
            $this->name = $r['projectName'];
            $this->realisationDate = $r['realisationDate'];
            $this->link = $r['link'];
        }
            
        public function     update()
        {
            $sql = "UPDATE projects SET projectName = :name, projectType = :type, realisationDate = :date, link =  :link, projectOnwer = :owner WHERE id = :id;";
            $stmt = $this->getConnection()->prepare($sql);
            $params = array(
                ':id' => $this->getId(),
                ':name' => $this->getName(),
                ':type' => $this->getType(),
                ':date' => $this->getDate(),
                ':link' => $this->getLink(),
                ':owner' => $this->getOwner()
            );

            return $stmt->execute($params);
        }
        

        public function     validate()
        {
            if(!empty($this->getName()) && !empty($this->getType()) && !empty($this->getDate()) && !empty($this->getLink()) && !empty($this->getOwner()) )
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