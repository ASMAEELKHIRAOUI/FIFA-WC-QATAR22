<?php
include_once '../classes/database.class.php';
    class Matches{

        private $id = NULL;
        private $dateTime;
        private $matchTeame_1_id;
        private $matchTeame_2_id;
        private $matchStaduim_id;
        private $price;
        private $description;

        public function __construct($mDt , $mT1_id , $mT2_id , $mS_id,$mP,$mD)
        {
            $this->dateTime = $mDt;
            $this->matchTeame_1_id = $mT1_id;
            $this->matchTeame_2_id = $mT2_id;
            $this->matchStaduim_id = $mS_id;
            $this->price = $mP;
            $this->description = $mD;
        }

        // public function getId(){
        //     return $this->id;
        // }
        // public function getDateTime(){
        //     return $this->dateTime;
        // }
        // public function getTeame_1_ID(){
        //     return $this->matchTeame_1_id;
        // }
        // public function getTeame_2_ID(){
        //     return $this->matchTeame_2_id;
        // }
        // public function getStaduimID(){
        //     return $this->matchStaduim_id;
        // }
        // public function getprice(){
        //     return $this->price;
        // }
        // public function getdescription(){
        //     return $this-> description;
        // }


        // public function setDateTime($mDt ){
        //     $this->dateTime = $mDt;
        // }
        // public function seTeame_1_ID($mT1_id){
        //     $this->matchTeame_1_id = $mT1_id;
        // }
        // public function seTeame_2_ID($mT2_id){
        //     $this->matchTeame_2_id = $mT2_id;
        // }
        // public function setStaduimID($mS_id){
        //     $this->matchStaduim_id = $mS_id;
        // }
        // public function setprice($mP){
        //     $this->price = $mP;
        // }
        // public function setdescription($mD){
        //     $this->description = $mD;
        // }


        //crud

        public function getMatchs(){

        }

        public function getMatch($id){

        }
        public function addMatch(){
            $database = new Database();
            $sql = " INSERT INTO matches(`match_team1`,`match_team2`,`stad`,`price`,`description`,`datetime`)values(?,?,?,?,?,?)";
            $conn= $database->connect()->prepare($sql);
            $conn->execute([ $this->matchTeame_1_id,$this->matchTeame_2_id ,$this->matchStaduim_id,$this->price,$this->description,$this->dateTime]);
            
        }
        public function updateMatch($id){
            
        }

        public function deleteMatch($id){
        }


    }




?>