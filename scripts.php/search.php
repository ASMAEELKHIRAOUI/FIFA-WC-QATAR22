<?php
    include_once '../classes/match.class.php';


    if(isset($_POST['ajaxRequest'])){
        
        if($_POST['ajaxRequest'] == "Search") {
            $matches = Matches::search($_POST['property'] , $_POST['message']);
            $i=0;

            

            foreach($matches as $match){
                $data[$i]['id'] = $match->getId();
                $data[$i]['teame-1'] = $match->getTeame_1_obj()->getCountry();
                $data[$i]['teame-2'] = $match->getTeame_2_obj()->getCountry();
                $data[$i]['logo-1'] = $match->getTeame_1_obj()->getLogo();
                $data[$i]['logo-2'] = $match->getTeame_2_obj()->getLogo();
                $data[$i]['stad'] = $match->getStaduim_obj()->getName();
                $data[$i]['date-time'] = $match->getDateTimeFormat();
                $data[$i]['image-1'] = $match->getTeame_1_obj()->getLogo();
                $data[$i]['image-2'] = $match->getTeame_2_obj()->getLogo();
                $data[$i]['price'] = $match->getPrice();
                $i++;
            }

            // $match = new Matches();
            // $data = array();
            // $data = $match->getActiveMatchs();

            echo json_encode($data);
        }
    }










?>