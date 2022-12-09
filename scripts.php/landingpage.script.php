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
    $matches = $match->getMatchs();

    $dateTimeStr = $matches[0]->getDateTime();

    // $dateTime = datetime::createfromformat('D, d M Y H:i:s e',$dateTimeStr);

    // echo $dateTime->format('d-M-Y H:i:s e');

    // 1975-11-18 13:43:00
    // $dateString = array("1975-11-18 13:43:00");

    // echo array_slice($dateString , 1 ,3 );
    // $dateTime = datetime::createfromformat('Y-M-D H:i:s',$dateString);

    // echo $dateTime->format('d-M-Y H:i:s e');



    
    

    // $matchs = $match->getMatchs();

    // echo $matchs[0]->getTeame_1_obj()->getCountry();
    // $matchs[0]->getTeame_2_obj();
    // $matchs[0]->getStaduim_obj();




?>