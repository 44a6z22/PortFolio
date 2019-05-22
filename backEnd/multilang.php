<?php
    session_start();
// setting the default language to english

    if (isset($_GET['lang'])) {
        $_SESSION['lang'] = $_GET['lang']; // setting the language to whatever language the visitor picked
    } else {
        if (!isset($_SESSION['lang'])) 
        {
            // $_SESSION['lang'] = 'en';
        }
    }
    
    
    // langs array 
    $lang = array(
        'en' => array(
            // infos
            'title' => 'HAMDAOUI Hamza',
            'fullstack' => 'Full-Stack Developer',
            'firstName' => $po->getFirstName(),
            'lastName' => $po->getLastName(),
            'about' => 'about',
            'skills' => 'skills',
            'goback' => 'go back',
            'busy' => "i'm currently working on a project. ", 
            'available' => 'i\'m ready to the next project',
            'desc' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum maxime, corporis aperiam ullam non rerum mollitia? Quos in nisi explicabo accusantium debitis, aperiam quidem quod aliquam saepe magnam, eos illo.'
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
            'available' => 'je suis prêt pour le prochain projet',
            'desc' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum maxime, corporis aperiam ullam non rerum mollitia? Quos in nisi explicabo accusantium debitis, aperiam quidem quod aliquam saepe magnam, eos illo.'
        )
    );


?>