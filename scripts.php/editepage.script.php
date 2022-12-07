<?php
   include_once '../classes/spectateur.class.php';
    //creat object 
    $obj = new Spectateur();
    //get id 
    $id= $_GET['id1'];
    $obj->setId($id);



?>
<?php
    include_once '../classes/stad.class.php';
    $stad = new Stad();
    $stads = array();
    $stads = $stad->getStads(); 

    // $stad->getStad(0);
    //     echo "<pre>";
    //     print_r($stad->getLocation());
    //     echo "<pre>";


    // foreach($stads as $stad){
    //     echo "<pre>";
    //     print_r($stad);
    //     echo "<pre>";
    // }


?>