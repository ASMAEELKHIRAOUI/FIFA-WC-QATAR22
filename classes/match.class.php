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
        private $code;

        public function __construct($mDt="" , $mT1_id="" , $mT2_id="" , $mS_id="" ,$mP="" ,$mD="" )
        {
            $this->dateTime = $mDt;
            $this->matchTeame_1_id = $mT1_id;
            $this->matchTeame_2_id = $mT2_id;
            $this->matchStaduim_id = $mS_id;
            $this->price = $mP;
            $this->description = $mD;
            $this->generateCode();
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
        public function getCode(){
            return $this->code;
        }

        public function setId($id ){
            $this->id = $id;
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

        public function generateCode(){
            $this->code = uniqid('' , true);
        }


        public function getObject($dbObject){
            $this->id = $dbObject->id;
            $this->dateTime = $dbObject->datetime;
            $this->matchTeame_1_id = $dbObject->match_team1;
            $this->matchTeame_2_id = $dbObject->match_team2;
            $this->matchStaduim_id = $dbObject->stad;
            $this->price = $dbObject->price;
            $this->description = $dbObject->description;
            $this->code = $dbObject->Code;
        }


        // crud same as jointure (d'ont us jointure jus use this SVP ) all you need is here  : abdellah

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
            $formatDate = date('l j M  H:i', strtotime($this->getDateTime()));
            return $formatDate;
        }

        public function getMatcheasma($id){ // cette function n'est pas fonctionné
            $database = new Database();
            $sql = "SELECT * FROM matches where id = ?";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$id]);
            if($stmt){
                $row = $stmt->fetch();
                $this->setId($row['id']);
                $this->setDateTime($row['datetime']);
                $this->seTeame_1_ID($row['match_team1']);
                $this->seTeame_2_ID($row['match_team2']);
                $this->setStaduimID($row['stad']);
                $this->setprice($row['price']);
                $this->setdescription($row['description']);
                return $row;
                }
        }

        //crud
        public static function getMatch($id){ 
            $database = new Database();
            $sql = "SELECT * FROM `matches` WHERE id=?";  
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$id]);
            $dbMatch = $stmt->fetch(PDO::FETCH_OBJ);

            
            $match = new Matches();
            $match->getObject($dbMatch);

            return $match;
        }

        public function addMatch(){
            $database = new Database();
            $sql = "INSERT INTO matches(match_team1,match_team2,stad,price,description,datetime,Code) VALUES(?,?,?,?,?,?,?)";
            $conn= $database->connect()->prepare($sql);
            $conn->execute([$this->matchTeame_1_id,$this->matchTeame_2_id ,$this->matchStaduim_id,$this->price,$this->description,$this->dateTime,$this->code]);
        }

        public function getActiveMatchs(){
            $database = new Database();
            $sql = "SELECT * FROM `matches`";  
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbMatchs = $stmt->fetchAll(PDO::FETCH_OBJ);

            $matchs = array();
            
            $i=0;
            foreach($dbMatchs as $dbmatch){
                $dbDate = date('Y-m-d', strtotime($dbmatch->datetime));
                $dbTime = date('H:i', strtotime($dbmatch->datetime));
                if($dbDate > date('Y-m-d')){
                    $matchs[$i] = new Matches();
                    $matchs[$i]->getObject($dbmatch);
                    $i++;
                }
                else if($dbDate == date('Y-m-d') && $dbTime >= date('H:i')){
                    $matchs[$i] = new Matches();
                    $matchs[$i]->getObject($dbmatch);
                    $i++;
                }
                
            }

            return $matchs;
        }

        public function getMatchs(){
            $database = new Database();
            $sql = "SELECT * FROM `matches` ";  
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
            $database = new Database();
            $query="UPDATE matches SET match_team1=? , match_team2=? , stad=? , price=? , description=? , datetime=? WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$this->getTeame_1_ID(),$this->getTeame_2_ID(), $this->getStaduimID(), $this->getprice() ,$this->getdescription() ,$this->getDateTime(), $id]);
            if($result)
                header('location: dashboard.php');
        }


        public function deleteMatch($id){
            $database =new Database();
            $query="DELETE FROM matches WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$id]);
            if($result)
                header('location: dashboard.php');
        }

        public static function  search($property , $data){
            $database = new Database();
            $sql = "SELECT m.*,t_1.country , t_2.country  FROM matches m INNER JOIN team t_1 ON m.match_team1 = t_1.id 
            INNER JOIN team t_2 ON m.match_team2 = t_2.id 
            WHERE t_1.$property LIKE '$data%' OR t_2.$property LIKE '$data%' ";  
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbMatchs = $stmt->fetchAll(PDO::FETCH_OBJ);

            $matchs = array();
            
            $i=0;
            foreach($dbMatchs as $dbmatch){
                $dbDate = date('Y-m-d', strtotime($dbmatch->datetime));
                $dbTime = date('H:i', strtotime($dbmatch->datetime));
                if($dbDate > date('Y-m-d')){
                    $matchs[$i] = new Matches();
                    $matchs[$i]->getObject($dbmatch);
                    $i++;
                }
                else if($dbDate == date('Y-m-d') && $dbTime >= date('H:i')){
                    $matchs[$i] = new Matches();
                    $matchs[$i]->getObject($dbmatch);
                    $i++;
                }
                
            }

            

            return $matchs;
        }
        
    }







?>