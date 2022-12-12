<?php
    include_once '../classes/spectateur.class.php';
    //creat object 
    $obj = new Spectateur();
    //get id 
    $id= @$_GET['id'];
    $obj->setId(1);

    $obj->getSpectateur();


    
?>