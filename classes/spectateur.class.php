<?php 
include_once 'database.class.php';
include_once 'user.class.php';



    class Spectateur extends User {
        private $matchsReserved = array();
        //crud
        
        public function getSpectateur()
        {
            $sql = "SELECT * FROM spectator WHERE id = $this->id";
            $conn = Database::connect();
            $stmt = $conn->prepare($sql); 
            $stmt->execute();   
            $arr =  $stmt->fetch(PDO::FETCH_ASSOC);
            //var_dump($arr);

            $this->setFirstName($arr['first_name']);
            $this->setLastName($arr['last_name']);
            $this->setEmail($arr['email']);
            $this->setPassword($arr['password']);
        
        }

        public function addSpectateur()
        {
        }

        public function updateSpectateur()
        {        
            $id = $_POST['id'];
            $firstName   = $_POST['firstName'];
            $lastName    = $_POST['lastName'];  
            $email       = $_POST['email'];
            $password    = $_POST['password'];
            
            $sql = "UPDATE `spectator` 
                        SET first_name='$firstName', last_name='$lastName',
                        email='$email',password='$password' WHERE id = $this->id";
            $conn = Database::connect();
            $stmt = $conn->prepare($sql); 
            $stmt->execute();
            header('location: ../pages/editprofile.php');
        }

        public function deleteSpectateur()
        {
            $sql = "DELETE  FROM `spectator` WHERE id = $this->id";
            $conn = Database::connect();
            $stmt = $conn->prepare($sql); 
            $stmt->execute();
            
            header('location: ../pages/editprofile.php');
        }

        public function cancel_changes()
        {
            header('location: ../pages/editprofile.php');
        }

        public function setReservation($match){
            if(!array_search($match , $this->matchsReserved)){
                include_once 'match.class.php';


                $indis = count($this->matchsReserved);
                $indis++;
                $this->matchsReserved[$indis] = new Matches();
                $this->matchsReserved[$indis] = $match;
            } else echo "this match is alredy reserved";

            
        }

        public function getMatchsReserved(){
            return $this->matchsReserved;
        }




    }
    
?> 