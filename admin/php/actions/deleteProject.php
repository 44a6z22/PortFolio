<?php
    require "config.php";
    $project = new Project($connection);
    if (isset($_GET['id']))
    {
        $project->setId($_GET['id']);
        if ( $project->delete())
        {
            header("location: ../../");
        }
    }
?>  