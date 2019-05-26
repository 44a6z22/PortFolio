<?php
    require "config.php";
    if (isset($_GET['projectId'])) 
    {
        $project = new Project($connection);
        $project->setId($_GET['projectId']);
        if ( $project->delete())
        {
            header("location: ../../");
        }
    } else if (isset($_GET['skillId'])) 
    {
        $skill = new Skill($connection);
        $skill->setId($_GET['skillId']);
        if ($skill->delete()) {
            header("location: ../../");
        }
    }
?>  