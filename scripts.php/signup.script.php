<?php 
include_once "../classes/spectateur.class.php";

if (isset($_POST['signup'])) signUp();


function signUp(){

    $spectateur = new Spectateur();

    $spectateur-> setEmail($_POST['email']);
    if ( $spectateur->isExistSpectateur($spectateur->getEmail()) > 0) {
        echo"<script>alert('This Email already exist');document.location='../pages/signup.php'</script>";
    }
    else {

        $spectateur->setFirstName($_POST['firstName']);
        $spectateur->setLastName($_POST['lastName']);
        $spectateur->setPassword($_POST['password']);
        $spectateur->addSpectateur();

        header('location:../pages/signin.php');

    }

}


?>