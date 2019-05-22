<?php

    abstract class  protoType
    {
        private $con,
                $id,
                $type,
                $owner,
                $name;

        
        public function     setId($id)
        {
            $this->id = $id;
        }
        public function     getId()
        {
            return $this->id;
        }
        
        public function     setConnection($con)
        {
            $this->con = $con;
        }
        public function     getConnection()
        {
            return $this->con;
        }
}
?>