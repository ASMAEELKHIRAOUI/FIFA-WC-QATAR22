<?php
    include_once dirname(__DIR__) . '/classes/spectateur.class.php';
    //creat object 
    $obj = new Spectateur();

    //get id 
    $id= @$_SESSION['id'];
    $obj->setId($id);

    //Routting
    $obj->getSpectateur();
    $obj->getOldReservation();
    if(isset($_POST['save_Changes'])) $obj->updateSpectateur();
    if(isset($_POST['cancel_save']))  $obj->cancel_changes();
    if(isset($_GET['delete_count']))  $obj->deleteSpectateur();
    
    
?>