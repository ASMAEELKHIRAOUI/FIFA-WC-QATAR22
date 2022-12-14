<?php
include_once 'landingpage.script.php';
include_once '../classes/spectateur.class.php';





$connectSpectateur = new Spectateur("yassin" , "bonno" , "semi-final" , "fifa@morocco.world" , 2);

$connectSpectateur->setId(2);

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