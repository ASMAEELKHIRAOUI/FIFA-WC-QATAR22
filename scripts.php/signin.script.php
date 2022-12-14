<?php
include_once "../classes/spectateur.class.php";

if (isset($_POST['signin'])) signIn();


function signIn(){

    $spectateur = new Spectateur();

    
    $spectateur->setEmail($_POST['email']);

    if( $spectateur->isExistAdmin($spectateur->getEmail())){

        $spectateur->setEmail($_POST['email']);
        $spectateur->setPassword($_POST['password']);

        $spectateur->loginAdmin();
    }else{

        $spectateur->setEmail($_POST['email']);
        $spectateur->setPassword($_POST['password']);

        $spectateur->loginSpectator();
    }



}  
?>