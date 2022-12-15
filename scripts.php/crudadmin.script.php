<?php 

include_once '../classes/match.class.php';
include_once '../classes/stad.class.php';
include_once '../classes/teame.class.php';
include_once '../classes/statistique.class.php';
include_once '../classes/reservation.class.php';
if (isset($_POST['SaveMatch'])){

  


$getproprite = new Matches($_POST['Datetime'],$_POST['Team1'],$_POST['Team2'],$_POST['Stade'],$_POST['Prix'],$_POST['Description']);
// 
// $getproprite->setDateTime($_POST['Datetime']);
// $getproprite->setTeame_1_ID($_POST['Team1']);
// $getproprite->setTeame_2_ID($_POST['Team2']);
// $getproprite->setStaduimID($_POST['Stade']);
// $getproprite->setprice($_POST['Prix']);
// $getproprite->setdescription($_POST['Description']);

$getproprite->addMatch();


header("Location:../pages/dashboard.php");


}

$match = new Matches();
$matchs  = $match->getMatchs();

if (isset($_POST['SaveStad'])){
  $name=$_POST['Name'];
  $capacity=$_POST['Capacity'];
  $location=$_POST['Location'];
  $city=$_POST['City'];
  $image=$_FILES['image']['name'];
  $pathimage = $_FILES['image']['tem_name'];
  $foolder = "../assets/img/stad/".$image;

  $getstad = new Stad();
  $getstad-> setName($name); 
  $getstad-> setCapacity($capacity ); 
  $getstad-> setLocation($location ); 
  $getstad-> setCity($city ); 
  $getstad-> setImage($image); 
  
  $getstad->addStad();
  header("Location:../pages/dashboard.php");

}

$stad =new Stad();
$stads=$stad->getStads();

   
   
   


if(isset($_POST['SaveTeam'])){

    $country=$_POST['Country']; 
    $coach=$_POST['Coach'];
    $image=$_FILES['Image']['name'];
    $logo=$_FILES['Logo']['name'];

    $getteam =new Team();
    
    $getteam->setCountry($country); 
    $getteam->setCoatch($coach); 
    $getteam->setImage($image); 
    $getteam->setLogo($logo);

    $getteam->addTeam();
    header("Location:../pages/dashboard.php");

}

 $team =new Team();
 $teams =$team->getTeams();




 // partie statistique 
    // pour les stades 
    $stadstatique = new Statistique();
    $statiquestad= $stadstatique->stadst();   
    // pour les matches 
    $matchstatique = new Statistique();
    $statisquematch=$matchstatique-> matchst();
    // pour les user 
    $userstatitique = new Statistique();
    $statiqueuser = $userstatitique->userst();
    // pour les tickets
    $ticketreserver =new Statistique();
    $reserverticket = $ticketreserver->ticketreserver();
    // pour les 
    $ticketdispo =new Statistique();
    $dispoticket = $ticketdispo->ticketdispo();
    // les reservation 
    $reservation= new Reservation();
    $reservationticket=$reservation->getreservation();
?>