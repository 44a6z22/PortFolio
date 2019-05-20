<?php
    
    include "define.php";

    class   Project extends Definition
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
            $this->connection = $con;
        }

        public function     int_6( $con, $name, $type, $owner, $link, $date)
        {
            $this->connection = $con;
            $this->name = $name;
            $this->type = $type;
            $this->owner = $owner;
            $this->link = $link;
            $this->realisationDate = $date; 
        }
        public function     add()
        {
            $sql = "INSERT INTO projects VALUES(null,:name, :type, :date, :link, :owner);";

            $stmt = $this->connection->prepare($sql); 
            $params = array(
                ':name' => $this->name , 
                ':type' => $this->type ,
                ':date' => $this->realisationDate , 
                ':link' => $this->link , 
                ':owner' => $this->owner
            );

            return $stmt->execute($params);
        }

        public function     count()
        {
            $sql = "SELECT count(*) as c FROM projects ;";
            $stmt = $this->connection->prepare($sql);    
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $res['c'];
        }
    }

?>