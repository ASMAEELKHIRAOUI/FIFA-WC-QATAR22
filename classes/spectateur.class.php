<?php 
include_once 'database.class.php';
include_once 'user.class.php';

    class Spectateur extends User {

        //crud

        public function isExistSpectateur($email){
            $database = new Database();
            $sql = "SELECT * FROM `spectator` WHERE email =?";

            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$email]);
            // $stmt->fetch(PDO::FETCH_OBJ);
            
            return $stmt->rowCount();
            
        }

        public function isExistAdmin($email){
            $database = new Database();
            $sql = "SELECT * FROM `admin` WHERE email =?";

            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$email]);
            // $stmt->fetch(PDO::FETCH_OBJ);

            

           return $stmt->rowCount();
            
        }

        public function addSpectateur(){
            $conn = new Database();
            try{
                $put = $conn->connect()->prepare("INSERT INTO spectator(first_name, last_name, email, password) values(?,?,?,?)");
                $put->execute([$this->firstName, $this->lastName, $this->email, $this->password]);
                echo"<script>alert('successfully');document.location='../pages/signin.php'</script>";
                


            }catch(Exception $e){
                return $e->getMessage();
            }
            // $database = new Database();
            // $sql = "SELECT * FROM `stad`";
            // $stmt = $database->connect()->prepare($sql);
            // $stmt->execute();
            // $dbStads = $stmt->fetchAll(PDO::FETCH_OBJ);

        }

        
        
        public function getSpectateur($id){

        }
        public function updateSpectateur($id){
        }
        public function deleteSpectateur($id){
        }

    }
    
?>