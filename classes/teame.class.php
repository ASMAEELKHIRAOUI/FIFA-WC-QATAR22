<?php

    class Team {
        
        private $id = NULL;
        private $country;
        private $coatch;
        private $logo;
        private $image;

        public function __construct($contr , $coat , $log , $imag)
        {
            $this->country = $contr;
            $this->coatch = $coat;
            $this->logo = $log;
            $this->image = $imag;
        }


        public function getId(){
            return $this->id;
        }
        public function getCountry(){
            return $this->country;
        }
        public function getCoatch(){
            return $this->coatch;
        }
        public function getImage(){
            return $this->image;
        }
        public function getLogo(){
            return $this->logo;
        }



        public function setCountry($contr){
            $this->country = $contr;
        }
        public function setCoatch($coat){
            $this->coatch = $coat;
        }
        public function setImage($log){
            $this->image = $log;
        }
        public function setLogo($imag){
            $this->logo = $imag;
        }


        //crud

        public function getTeams(){
            
        }

        public function getTeam($id){
            $query="SELECT * FROM team WHERE id=?";
            $result = $this->connect()->prepare($query);
            $result->execute([$id]);
            $row = $result->fetch();
            return $row;
        }
        public function addTeam($object){
            

        }
        public function updateTeam($id){
            $sql="UPDATE team SET "
        }

        public function deleteTeam($id){
        }





    }












?>