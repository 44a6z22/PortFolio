<?php

    require "config.php";
    if (isset($_POST['addSkill']))
    {
        $skill = new Skill();
        $skill->setConnection($connection);
        $skill->setName($_POST['name']);
        $skill->setType($_POST['type']); 
        $skill->setOwner($_POST['owner']); 
        $skill->setPic("skill pic");
        $skill->setPersentage($_POST['persentage']);
        if ($skill->add())
        {
            header('location: ../../');
        }
    }
    else if ( isset( $_POST['updateSkill'])) 
    {
        $skill = new Skill();
        $skill->setId($_POST['id']);
        $skill->setConnection($connection);
        $skill->setName($_POST['name']);
        $skill->setType($_POST['type']);
        $skill->setOwner($_POST['owner']);
        $skill->setPic("skill pic");
        $skill->setPersentage($_POST['persentage']);
       
        if ($skill->update()) {
            header('location: ../../');
        }
    }

?>