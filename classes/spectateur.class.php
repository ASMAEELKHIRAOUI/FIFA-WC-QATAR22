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
            $res =  $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }   
        public function addSpectateur($object){
            
        }
        public function updateSpectateur($id){

        }
        public function deleteSpectateur($id){

        }

    }
    
?> 