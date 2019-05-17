<?php
    session_start();
// setting the default language to english

    if (isset($_GET['lang'])) {
        $_SESSION['lang'] = $_GET['lang']; // setting the language to whatever language the visitor picked
    } else {
        if (!isset($_SESSION['lang'])) 
        {
            $_SESSION['lang'] = 'en';
        }
    }
    
    

    // creating an array of string and each array will be used acording to which language chosed
   
    $lang = array(
        'en' => array(
            'title' => 'HAMDAOUI Hamza',
            'fullstack' => 'Full-Stack Developer',
            'firstName' => $po->getFirstName(),
            'lastName' => $po->getLastName(),
            'about' => 'about',
            'skills' => 'skills',
            'goback' => 'go back', 
            'busy' => "i'm currently working on a project. ", 
            'available' => 'i\'m ready to the next project'
        ),
        'fr' => array(
            'title' => 'HAMDAOUI Hamza',
            'firstName' => $po->getFirstName(),
            'lastName' => $po->getLastName(),
            'fullstack' => 'Développeur Full-Stack',
            'about' => 'a propos',
            'skills' => 'competance',
            'goback' => 'l\'acceuil',
            'busy' => 'Je travaille actuellement sur un projet.' ,            
            'available' => 'je suis prêt pour le prochain projet'
        )
    );


?>