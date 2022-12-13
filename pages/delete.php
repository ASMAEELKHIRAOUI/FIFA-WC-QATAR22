<?php
include_once '../classes/teame.class.php';
include_once '../classes/match.class.php';
include_once '../classes/stad.class.php';


$connect = new Database;
$connect->connect();


if(isset($_GET['deleteteam']))     {
    $team= new Team();
    $team->deleteTeam($_GET['deleteteam']);
}
if(isset($_GET['deletematch']))     {
    $match= new Matches();
    $match->deleteMatch($_GET['deletematch']);
    // $stad= new Stad();
    // $stad->deleteStad($_GET['delete']);
}
if(isset($_GET['deletestad']))     {
    $stad= new Stad();
    $stad->deleteStad($_GET['deletestad']);
}

