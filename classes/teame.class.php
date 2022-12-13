<?php
    include_once 'database.class.php';
    // include_once '../pages/dashboard.php';

    // if(isset($_POST['updateTeams']))        updateTeam();
    if(isset($_POST['delete']))     deleteTeam();
    class Team{

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
        public function setId($id){
            $this->id = $id;
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
            $database = new Database();
            // $database->connect();
            $query= "SELECT * FROM team WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$id]);
            if($result){
            $row = $result->fetch();
            $this->setId($row['id']);
            $this->setCountry($row['country']);
            $this->setCoatch($row['coach']);
            $this->setImage($row['image']);
            $this->setLogo($row['logo']);

            return $row;
            }
        }
        public function addTeam(){
        $database =new Database();
        $sql="INSERT INTO team (country,coach,image,logo)  VALUES (?,?,?,?)";
        $stmt= $database->connect()->prepare($sql);
        $stmt->execute([$this->getCountry(),$this->getCoatch(),$this->getImage(),$this->getLogo()]);

            
        }

        public function updateTeam($id){
            $database =new Database();
            $query="UPDATE team SET country=? ,coach=? ,image=? ,logo=? WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$this->getCountry(),$this->getCoatch(),$this->getImage(),$this->getLogo(), $id]);
            // var_dump($result);
            if($result)
                header('location: dashboard.php');
        }

        public function deleteTeam($id){
            $database =new Database();
            $query="DELETE FROM team WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$id]);
            if($result)
                header('location: dashboard.php');
        }
    }


    









?>