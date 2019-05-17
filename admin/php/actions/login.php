<?php
    session_start();

    // include the database Class 
    require "../../../backEnd/classes/db.php";

    // classes includes 
    require "../../../backEnd/classes/profileOwner.php";

    // connection include 
    require "../../../backEnd/connection/connection.php";

    // creating an admin object
    $admin = new ProfileOwner($connection); 
    
    // checking if the login form was submited
    if (isset($_POST['submit']))
    {   
        // verifying the logi information with the information in the database
        $res =  $admin->login($_POST['email'], $_POST['pass']);

        if ($res)
        {
            $_SESSION['admin_session'] =".";

            // send me to the dashboard if the login was successful
            header ('location: ../../dashboard.php');
        }       
        else {
            // otherwise keep me in the login form
            header ('location: ../../?err='.$res);
        }
    }
     
?>
