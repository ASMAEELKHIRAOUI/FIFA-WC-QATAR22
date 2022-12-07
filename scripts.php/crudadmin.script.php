<?php 
include_once '../pages/dashboard.php';
include_once '../classes/match.class.php';
if (isset($_POST['SaveMatch'])){

$getproprite = new Matches($_POST['Datetime'],$_POST['Team1'],$_POST['Team2'],$_POST['Stade'],$_POST['Prix'],$_POST['Description']);

// $getproprite->setDateTime($_POST['Datetime']);
// $getproprite->seTeame_1_ID($_POST['Team1']);
// $getproprite->seTeame_2_ID($_POST['Team2']);
// $getproprite->setStaduimID($_POST['Stade']);
// $getproprite->setStaduimID($_POST['Prix']);
// $getproprite->setStaduimID($_POST['Description']);

$getproprite->addMatch();


}




?>