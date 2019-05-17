<?php
    // include the database Class 
    require "../backEnd/classes/db.php";

    // connection include 
    require "../backEnd/connection/connection.php";
    
    // classes includes 
    require "../backEnd/classes/profileOwner.php";
    
    // creating a profile owner abject 
    $po = new ProfileOwner($connection);  

    // include the language dectionary
    require "../backEnd/multilang.php";
    

?>