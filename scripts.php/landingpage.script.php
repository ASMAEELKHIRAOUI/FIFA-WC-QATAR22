<?php



    include_once '../classes/stad.class.php';
    $stad = new Stad();
    $stads = array();
    $stads = $stad->getStads();

    include_once '../classes/teame.class.php';
    $team = new Team();
    $teams = array();
    $teams = $team->getTeams();

    
    
    
    // if(isset($_POST['display-Machts'])) {}
    // else if(isset($_POST['display-Teams']));
        

        
    // else if(isset($_POST['display-Stads']))  {}

    // // echo "<pre>";
    // // print_r($dataResult);
    // // echo "</pre>";

    // header('Location:../pages/stadpage.php');


    

    












?>