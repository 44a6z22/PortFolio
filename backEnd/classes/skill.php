<?php

    class Skill 
    {
        private $con,
                $id,
                $type,
                $owner,
                $name,
                $pic,
                $persentage;

    // setters

    public function     setId($id)
    {
        $this->id = $id;
    }
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
    public function     setPic($pic)
    {
        $this->pic = $pic;
    }
    public function     setPersentage($pers)
    {
        $this->persentage = $pers;
    }


    //getters

    public function     getId()
    {
        return $this->id;
    }
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
    public function     getPersentage()
    {
        return $this->persentage;
    }

    public function     getPic()
    {
        return $this->pic;
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
        { }

        public function     init_1($con)
        {
            $this->con = $con;
        }

        public function     int_6($con, $name, $type, $owner, $pic, $persentage)
        {
            $this->con = $con;
            $this->name = $name;
            $this->type = $type;
            $this->owner = $owner;
            $this->pic = $pic ;
            $this->persentage = $persentage;
        }

    public function     add()
    {
        $sql = "INSERT INTO skills VALUES(null,:name, :type, :persentage, :pic, :owner);";

        $stmt = $this->getConnection()->prepare($sql);

        $params = array(
            ':name' => $this->getName(),
            ':type' => $this->getType(),
            ':pic' => $this->getPic(),
            ':persentage' => $this->getPersentage(),
            ':owner' => $this->getOwner()
        );
        if ($this->validate()) {

            return $stmt->execute($params);
        }
        return false;
    }

    public function     delete()
    {
        $sql = "DELETE FROM skills WHERE id = :id";
        $stmt = $this->getConnection()->prepare($sql);

        $params = array(
            ':id' => $this->getId()
        );

        return $stmt->execute($params);
    }

    public function     count()
    {
        $sql = "SELECT count(*) as c FROM skills;";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['c'];
    }

    public function     getSkillsByType($type)
    {
        $sql = "SELECT * from skills WHERE skillType = :type order by id ; ";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute(
            array(
                ':type' => $type
            )
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function     getSkills()
    {
        $sql = "SELECT * from skills; ";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    public function     getSkill()
    {
        $sql = "SELECT * from skills WHERE id = :id; ";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute(
            array(
                ':id' => $this->getId()
            )
        );

        $r = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $r['skillName'];
        $this->persentage = $r['persentage'];
        $this->pic = $r['skillPicture'];
    }

    public function     update()
    {
        $sql = "UPDATE skills SET skillName = :name, skillType = :type, persentage = :per, skillPicture =  :pic, skillOwner = :owner WHERE id = :id;";
        
        $stmt = $this->getConnection()->prepare($sql);
        $params = array(
            ':id' => $this->getId(),
            ':name' => $this->getName(),
            ':type' => $this->getType(),
            ':per' => $this->getPersentage(),
            ':pic' => $this->getPic(),
            ':owner' => $this->getOwner()
        );

        return $stmt->execute($params);
    }


    public function     validate()
    {
        if (!empty($this->getName()) && !empty($this->getType()) && !empty($this->getPersentage()) && !empty($this->getPic()) && !empty($this->getOwner())) {
                return true;
            
        }
        return false;
    }

    } 
?>