<?php
    require "config.php";
		$project = new Project();

    if (isset($_POST['submit'])) {

			$project->setConnection($connection);
			$project->setName($_POST['name']);
			$project->setType($_POST['type']);
			$project->setOwner($_POST['owner']);
			$project->setLink($_POST['link']);
			$project->setDate($_POST['date']);
  
			
			if($project->add())
			{
				header('location: ../../');
			}
			else
			{
				echo "something went wrong"; 
			}
    } else if ( isset($_POST['update'])){
			
				$project->setConnection($connection);
				$project->setId($_POST['id']);
				$project->setName($_POST['name']);
				$project->setType($_POST['type']);
				$project->setOwner($_POST['owner']);
				$project->setLink($_POST['link']);
				$project->setDate($_POST['date']);


				if ($project->update()) {
					header('location: ../../');
				} else {
					echo "something went wrong";
				}
		}
?>