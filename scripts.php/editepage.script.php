<?php
   include_once '../classes/spectateur.class.php';
    //creat object 
    $obj = new Spectateur(null, null, null, null, null);
    //get id 
    $id= @$_GET['id'];
    $obj->setId(1);

        var_dump($obj);

    $obj->getSpectateur();


?>