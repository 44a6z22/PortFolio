<?php

    abstract class  Definition
    {
        private $connection,
                $Id,
                $type,
                $owner,
                $name;

        
        public function     setId($id)
        {
            $this->Id = $id;
        }
        
        public function     getConnection()
        {
            return $this->connection;
        }
}
?>