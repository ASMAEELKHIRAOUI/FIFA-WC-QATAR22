<?php


    include_once '../classes/stad.class.php';
    $stad = new Stad();
    $stads = array();
    $stads = $stad->getStads();

    include_once '../classes/teame.class.php';
    $team = new Team();
    $teams = array();
    $teams = $team->getTeams();

    include_once '../classes/match.class.php';
    $match = new Matches();
    $matches = array();
    $matches = $match->getActiveMatchs();


    include_once '../classes/spectateur.class.php';
    $connectSpectateur = new Spectateur("yassin" , "bonno" , "semi-final" , "fifa@morocco.world" , 2);
    $connectSpectateur->setReservation($matches[1]);
    
    $connectSpectateur->setReservation($matches[1]);


    echo "<pre>";
    print_r($connectSpectateur->getMatchsReserved());
    echo "</pre>";

    






?>