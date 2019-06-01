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
            
            'title' => 'HAMDAOUI Hamza',
            'fullstack' => 'Full-Stack Developer',
            'firstName' => $po->getFirstName(),
            'lastName' => $po->getLastName(),
            'about' => 'About',
            'skills' => 'Skills',
            'goback' => 'Go back',
            'busy' => "I'm currently working on a project. ",
            'avaliable' => 'I\'m ready to the next project',
            'desc' => $po->desc(),
            'hobbie' => 'Hobbies',
            'browsers' => 'Preferred browser',
            'localisation' => "My location", 
            'more skills' => "More skills", 
            'tools' => "Tools for communication and project management"
        ),
        'fr' => array(
            'title' => 'HAMDAOUI Hamza',
            'firstName' => $po->getFirstName(),
            'lastName' => $po->getLastName(),
            'fullstack' => 'Développeur Full-Stack',
            'about' => 'Apropos',
            'skills' => 'Competence',
            'goback' => 'L\'acceuil',
            'busy' => 'Je travaille actuellement sur un projet.' ,
            'avaliable' => 'Je suis prêt pour le prochain projet',
            'desc' => "Je suis développeur full stack depuis 2 ans. dans chaque nouveau projet, j'applique de nouvelles technologies pour un flux de travail plus efficace ",
            'hobbie' => 'Loisirs',
            'browsers' => 'Navigateur préféré',
            'localisation' => 'Ma position', 
            'more skills' => "Plus de compétences", 
            'tools' => "Outils de communication et de gestion de projet"
        )
    );


?>