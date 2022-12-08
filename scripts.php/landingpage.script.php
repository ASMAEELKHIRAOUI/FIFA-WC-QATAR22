<?php

    if(isset($_POST['Upcoming-Machts'])) displayMatches();

    include_once '../classes/stad.class.php';
    $stad = new Stad();
    $stads = array();
    $stads = $stad->getStads();

    include_once '../classes/teame.class.php';
    $team = new Team();
    $teams = array();
    $teams = $team->getTeams();


    function displayMatches(){

    }












?>