<?php 
    include_once '../classes/database.class.php';
    class Stad{
        private $id = NULL;
        private $name;
        private $capacity;
        private $location;
        private $city;
        private $image;

        public function __construct($namec="" , $capacityc="" , $locationc="" , $cityc="" , $imagec="")
        {
            $this->name = $namec;
            $this->capacity = $capacityc;
            $this->location = $locationc;
            $this->city = $cityc;
            $this->image = $imagec;
        }

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
        

        public function setId($id){
            $this->id = $id;
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
            $sql = "SELECT * FROM `stad` where id = ?";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$id]);
            // $dbStad = $stmt->fetchAll(PDO::FETCH_OBJ);
            // $this->getObject($dbStad);
            if($stmt){
                $row = $stmt->fetch();
                $this->setId($row['id']);
                $this->setName($row['name']);
                $this->setCapacity($row['capacity']);
                $this->setLocation($row['location']);
                $this->setCity($row['city']);
                $this->setImage($row['image']);
                return $row;
                }
        }

        public function addStad(){
            $database = new Database();
            $sql ="INSERT INTO stad(name,capacity,location,city,image) VALUES(?,?,?,?,?)" ;
            $stmt= $database->connect()->prepare($sql);
            $stmt->execute([$this->getName(), $this->getCapacity(),$this->getLocation(),$this->getCity(), $this->getImage() ]) ; 
            // header("Location:../pages/dashboard.php");
        }
        public function updateStad($id){
            $database =new Database();
            $query="UPDATE stad SET name=? , capacity=? , location=? , city=? WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$this->getName(), $this->getCapacity(), $this->getLocation(), $this->getCity(), $id]);
            if($result)
                header('location: dashboard.php');
        }
        
        public function deleteStad($id){
            $database =new Database();
            $query="DELETE FROM stad WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$id]);
            if($result)
                header('location: dashboard.php');
        }
         
    }

    

     


?>