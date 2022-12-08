<?php 
include_once "../classes/spectateur.class.php";

if (isset($_POST['signup'])) signUp();


function signUp(){

    $spectateur = new Spectateur();

    $spectateur-> setEmail($_POST['email']);
    if ( $spectateur->isExistSpectateur($spectateur->getEmail()) || $spectateur->isExistAdmin($spectateur->getEmail())) {

        echo"<script>alert('already exist try to login or register again.');document.location='../pages/signup.php'</script>";
    }
    else {
        $spectateur->setFirstName($_POST['firstName']);
        $spectateur->setLastName($_POST['lastName']);
        $spectateur->setPassword($_POST['password']);
        $spectateur->setRoll(2);
        $spectateur->addSpectateur();

        echo"<script>alert('successfully');document.location='../pages/signin.php'</script>";
    }

}


?>