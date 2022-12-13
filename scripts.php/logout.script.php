<?php
include_once "../classes/spectateur.class.php";

if(isset($_GET['action']) && $_GET['action'] === 'logOut') logOut();

function logOut(){
    $spectateur = new Spectateur();
    $spectateur->logOut();
}


 ?>