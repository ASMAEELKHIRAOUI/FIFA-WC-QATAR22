<?php 
    include_once '../classes/database.class.php';
    class Stad{
        private $id = NULL;
        private $name;
        private $capacity;
        private $location;
        private $city;
        private $image;

        // public function __construct($name , $capacity , $location , $city , $image)
        // {
        //     $this->name = $name;
        //     $this->capacity = $capacity;
        //     $this->location = $location;
        //     $this->city = $city;
        //     $this->image = $image;
        // }

        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getCapacity(){
            return $this->capacity;
        }
        public function getLocation(){
            return $this->location;
        }
        public function getCity(){
            return $this->city;
        }
        public function getImage(){
            return $this->image;
        }
        

        public function setName($name){
            $this->name = $name;
        }
        public function setCapacity($capacity){
            $this->capacity = $capacity;
        }
        public function setLocation($location){
            $this->location = $location;
        }
        public function setCity($city){
            $this->city = $city;
        }
        public function setImage($image){
            $this->image = $image;
        }

        public function getObject($dbObject){
            $this->id = $dbObject->id;
            $this->name = $dbObject->name;
            $this->capacity = $dbObject->capacity;
            $this->location = $dbObject->location;
            $this->city = $dbObject->city;
            $this->image = $dbObject->image;
        }

        //crud
        public function getStads(){
            $database = new Database();
            $sql = "SELECT * FROM `stad`";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbStads = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            $stadts = array();
            
            $i=0;
            foreach($dbStads as $dbStad){
                $stadts[$i] = new Stad();
                $stadts[$i]->getObject($dbStad);
                $i++;
            }

            return $stadts;
        }

        public function getStad($id){
            $database = new Database();
            $sql = "SELECT * FROM `stad` where id = $id";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbStad = $stmt->fetchAll(PDO::FETCH_OBJ);
            $this->getObject($dbStad);
        }

        public function addStad($object){
            

        }
        public function updateStad($id){
            
        }
        
        public function deleteStad($id){
        }
    }

    
    




?>