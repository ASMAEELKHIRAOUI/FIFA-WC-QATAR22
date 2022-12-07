<?php 
if (isset($_POST('SaveMatch'))){

include '../classes/match.class.php';
$getproprite = new Matches();

$getproprite->setDateTame($_POST(Datetime));
$getproprite->seTeame_1_ID($_POST(Team1));
$getproprite->seTeame_2_ID($_POST(Team2));
$getproprite->setStaduimID($_POST(Stade));

$getproprite->addMatch($object);




}




?>