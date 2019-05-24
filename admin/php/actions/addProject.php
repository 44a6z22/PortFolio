<?php
    require "config.php";

    if (isset($_POST['submit'])) {

    $project = new Project($connection, $_POST['name'], $_POST['type'], $_POST['owner'], $_POST['link'], $_POST['date']);        
    
    $project->setConnection($connection);
    
		if($project->add())
		{
			header('location: ../../');
		}
		else
		{
			echo "something went wrong"; 
		}
    }
?>