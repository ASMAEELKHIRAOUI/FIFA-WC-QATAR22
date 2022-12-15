<?php
include_once 'landingpage.script.php';
include_once '../classes/spectateur.class.php';


$connectSpectateur = new Spectateur();

if(isset($_SESSION['id'])) $connectSpectateur->setId($_SESSION['id']);


if(isset($_POST['ajaxRequest'])){
    if($_POST['ajaxRequest'] == "reserve-match") {

        for($i=0 ; $i<$_POST['ticket_Number'] ; $i++)
            reservMatch($_POST['match_Id'] , $connectSpectateur);
    }
    $data = $_POST['ticket_Number'];
    echo json_encode($data);
}

$matchsReserved = $connectSpectateur->getMatchsReserved();

function reservMatch($matchId , $connectSpectateur){
    $connectSpectateur->setReservation($matchId);
}



function getRezerveMatch($matchId){
    $matchReserved = $GLOBALS["connectSpectateur"]->getMatchReserved($matchId);
    return $matchReserved;
}












?>