<?php

    abstract class  protoType
    {
        public $con,
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
            $this->realisationDate = $link;
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

    }
?>