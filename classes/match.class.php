<?php
    class Matches{
        private $id = NULL;
        private $dateTime;
        private $matchTeame_1_id;
        private $matchTeame_2_id;
        private $matchStaduim_id;

        public function __construct($mDt , $mT1_id , $mT2_id , $mS_id)
        {
            $this->dateTime = $mDt;
            $this->matchTeame_1_id = $mT1_id;
            $this->matchTeame_2_id = $mT2_id;
            $this->matchStaduim_id = $mS_id;
        }

        public function getId(){
            return $this->id;
        }
        public function getDateTame(){
            return $this->dateTime;
        }
        public function geTeame_1_ID(){
            return $this->matchTeame_1_id;
        }
        public function geTeame_2_ID(){
            return $this->matchTeame_2_id;
        }
        public function getStaduimID(){
            return $this->matchStaduim_id;
        }


        public function setDateTame($mDt ){
            $this->dateTime = $mDt;
        }
        public function seTeame_1_ID($mT1_id){
            $this->matchTeame_1_id = $mT1_id;
        }
        public function seTeame_2_ID($mT2_id){
            $this->matchTeame_2_id = $mT2_id;
        }
        public function setStaduimID($mS_id){
            $this->matchStaduim_id = $mS_id;
        }


        //crud

        public function getMatchs(){

        }

        public function getMatch($id){

        }
        public function addMatch($object){
            

        }
        public function updateMatch($id){
            
        }

        public function deleteMatch($id){
        }


    }
    



?>