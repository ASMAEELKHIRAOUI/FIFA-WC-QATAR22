<?php
    include_once '../classes/database.class.php';


    class Team {

        private $id = NULL;
        private $country;
        private $coatch;
        private $logo;
        private $image;


        public function __construct($contr ="" , $coat ="" , $log ="" , $imag ="")
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

        public function getObject($dbObject){
            $this->id = $dbObject->id;
            $this->country = $dbObject->country;
            $this->coatch = $dbObject->coach;
            $this->logo = $dbObject->image;
            $this->image = $dbObject->logo;
        }

        //crud

        public function getTeams(){
            $database = new Database();
            $sql = "SELECT * FROM `team`";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbStads = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            $stadts = array();
            
            $i=0;
            foreach($dbStads as $dbStad){
                $stadts[$i] = new Team();
                $stadts[$i]->getObject($dbStad);
                $i++;
            }
            return $stadts;
        }

        public function getTeam($id){

        }
        public function addTeam(){
        $database =new Database();
        $sql="INSERT INTO team  VALUES (?,?,?,?)";
        $stmt= $database->connect()->prepare($sql);
        // $stmt->exucute();

            
        }
        public function updateTeam($id){

        }

        public function deleteTeam($id){
        }
    }


    









?>