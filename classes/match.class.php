<?php
include_once '../classes/database.class.php';
    class Matches{

        public $id = NULL;
        public $dateTime;
        public $matchTeame_1_id;
        public $matchTeame_2_id;
        public $matchStaduim_id;
        public $price;
        public $description;

        public function __construct($mDt="" , $mT1_id="" , $mT2_id="" , $mS_id="" ,$mP="" ,$mD="" )
        {
            $this->dateTime = $mDt;
            $this->matchTeame_1_id = $mT1_id;
            $this->matchTeame_2_id = $mT2_id;
            $this->matchStaduim_id = $mS_id;
            $this->price = $mP;
            $this->description = $mD;
        }


        public function getId(){
            return $this->id;
        }
        public function getDateTime(){
            return $this->dateTime;
        }
        public function getTeame_1_ID(){
            return $this->matchTeame_1_id;
        }
        public function getTeame_2_ID(){
            return $this->matchTeame_2_id;
        }
        public function getStaduimID(){
            return $this->matchStaduim_id;
        }
        public function getprice(){
            return $this->price;
        }
        public function getdescription(){
            return $this-> description;
        }


        public function setDateTime($mDt ){
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
        public function setprice($mP){
            $this->price = $mP;
        }
        public function setdescription($mD){
            $this->description = $mD;
        }


        public function getObject($dbObject){
            $this->id = $dbObject->id;
            $this->dateTime = $dbObject->datetime;
            $this->matchTeame_1_id = $dbObject->match_team1;
            $this->matchTeame_2_id = $dbObject->match_team2;
            $this->matchStaduim_id = $dbObject->stad;
            $this->price = $dbObject->price;
            $this->description = $dbObject->description;
        }



        // crud same as jointure (not use jointure jus use this SVP ) all you need is here  : abdellah


        public function getTeame_1_obj(){
            $database = new Database();
            $sql = "SELECT * FROM `team` WHERE id=?";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$this->matchTeame_1_id]);
            $dbTeames_1 = $stmt->fetch(PDO::FETCH_OBJ);

            include_once 'teame.class.php';
            $teme_1 = new Team();
            $teme_1->getObject($dbTeames_1);
            return $teme_1;
        }

        public function getTeame_2_obj(){
            $database = new Database();
            $sql = "SELECT * FROM `team` WHERE id=?";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$this->matchTeame_2_id]);
            $dbTeames_2 = $stmt->fetch(PDO::FETCH_OBJ);

            include_once 'teame.class.php';
            $teme_2 = new Team();
            $teme_2->getObject($dbTeames_2);

            return $teme_2;
        }

        public function getStaduim_obj(){
            $database = new Database();
            $sql = "SELECT * FROM `stad` WHERE id=?";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$this->matchStaduim_id]);
            $dbStaduim = $stmt->fetch(PDO::FETCH_OBJ);
            include_once 'stad.class.php';
            $staduim = new Stad();
            $staduim->getObject($dbStaduim);

            return $staduim;
        }

        public function getDateTimeFormat(){
            $strDate = $this->getDateTime();
            $formatDate = substr($strDate, 5, -3);
            return $formatDate;
        }


        //crud

        public function getMatch($id){
            $database = new Database();
            $sql = "SELECT * FROM matches where id = $id";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbMatch = $stmt->fetchAll(PDO::FETCH_OBJ);
            $this->getObject($dbMatch);
        }
        public function addMatch(){
            $database = new Database();
            $sql = "INSERT INTO matches(match_team1,match_team2,stad,price,description,datetime) VALUES(?,?,?,?,?,?)";
            $conn= $database->connect()->prepare($sql);
            $conn->execute([$this->matchTeame_1_id,$this->matchTeame_2_id ,$this->matchStaduim_id,$this->price,$this->description,$this->dateTime]);
        }

        public function getMatchs(){
            $database = new Database();
            $sql = "SELECT * FROM `matches`";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbMatchs = $stmt->fetchAll(PDO::FETCH_OBJ);

            $matchs = array();
            
            $i=0;
            foreach($dbMatchs as $dbmatch){
                $matchs[$i] = new Matches();
                $matchs[$i]->getObject($dbmatch);
                $i++;
            }

            return $matchs;
        }

        public function updateMatch($id){
            // if(isset(updateMatch)){
                // $query="UPDATE match SET match_team1=? , match_team2=? , stad=? , price=? , description=? , datetime=? WHERE id=?";
                // $result = $this->connect()->prepare($query);
                // $result->execute([$id,$matchTeame_1_id, $$matchTeame_2_id, $matchStaduim_id ,$price ,$description ,$dateTime]);
                // if($result)
                //     header('location: dashboard.php');
            // }
        }

        public function deleteMatch($id){
        }
    }







?>