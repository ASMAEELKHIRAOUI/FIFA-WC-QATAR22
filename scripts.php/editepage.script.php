<?php
   include_once '../classes/spectateur.class.php';
    //creat object 
    $obj = new Spectateur();

    //get id 
    $id= @$_GET['id'];
    $obj->setId(1);

    //Routting
    $obj->getSpectateur();
    if(isset($_POST['save_Changes'])) $obj->updateSpectateur();
    if(isset($_POST['cancel_save']))  $obj->cancel_changes();
    if(isset($_POST['delete_count']))  $obj->deleteSpectateur();
    

?>