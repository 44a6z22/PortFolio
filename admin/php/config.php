<?php

    // include the database Class 
    require "../backEnd/classes/db.php";


    // classes includes 
    require "../backEnd/classes/profileOwner.php";
    require "../backEnd/classes/project.php";

    // connection include 
    require "../backEnd/connection/connection.php";

    // connection include 
    require "../backEnd/classes/const.php";

    // creating an admin object
    $admin = new ProfileOwner($connection); 
    $project = new Project($connection);
?>