<?php 
include_once 'database.class.php';
include_once 'user.class.php';

    class Spectateur extends User {

        //crud
        
        public function getSpectateur(){
            $sql = "SELECT * FROM spectator WHERE id = $this->id";
            $conn = Database::connect();
            $stmt = $conn->prepare($sql); 
            $stmt->execute();
            $arr =  $stmt->fetch(PDO::FETCH_ASSOC);

            $this->setFirstName($arr['first_name']);
            $this->setLastName($arr['last_name']);
            $this->setEmail($arr['email']);
            $this->setPassword($arr['password']);

            return $arr;
            
        }   
        public function addSpectateur($object){
            
        }
        public function updateSpectateur($id){

        }
        public function deleteSpectateur($id){

        }

    }
    
?> 