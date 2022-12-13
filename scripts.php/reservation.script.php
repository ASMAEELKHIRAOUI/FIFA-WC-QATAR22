<?php
include_once 'landingpage.script.php';
include_once '../classes/spectateur.class.php';





$connectSpectateur = new Spectateur("yassin" , "bonno" , "semi-final" , "fifa@morocco.world" , 2);

$connectSpectateur->setId(2);

if(isset($_POST['ajaxRequest'])){
    if($_POST['ajaxRequest'] == "reserve-match") reservMatch($_POST['match_Id'] , $connectSpectateur);
    $matchId = $GLOBALS["matches"][$_POST['match_Id'] ]->getId();
    $data = count(getRezerveMatch($matchId));
    echo json_encode($data);
}



$matchsReserved = $connectSpectateur->getMatchsReserved();










function reservMatch($matchId , $connectSpectateur){
    $connectSpectateur->setReservation($GLOBALS["matches"][$matchId]);
}



function getRezerveMatch($matchId){
    $matchReserved = $GLOBALS["connectSpectateur"]->getMatchReserved($matchId);
    return $matchReserved;
}












?>