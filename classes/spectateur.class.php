<?php 
include_once 'database.class.php';
include_once 'user.class.php';

  session_start();

    class Spectateur extends User {

        //crud

        public function isExistSpectateur($email){
            $database = new Database();
            $sql = "SELECT * FROM `spectator` WHERE email =?";

            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$email]);
            
            return $stmt->rowCount();
            
        }

        public function isExistAdmin($email){
            $database = new Database();
            $sql = "SELECT * FROM `admin` WHERE email =?";

            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$email]);

            return $stmt->rowCount();
            
        }

        public function addSpectateur(){
            $conn = new Database();
            try{

                   $sql1 = "INSERT INTO spectator(first_name, last_name, email, password) values(?,?,?,?)";
                   $put = $conn->connect()->prepare($sql1);
                   $put->execute([$this->firstName, $this->lastName, $this->email, $this->password]);

                   echo"<script>alert('successfully');document.location='../pages/signin.php'</script>";
        
                
            }catch(Exception $e){
                return $e->getMessage();
            }
        }



        public function loginSpectator() { 
            $conn = new Database();

            $sql = "SELECT * FROM spectator WHERE email = ? AND password = ?;";
            $stmt =  $conn->connect()->prepare($sql);
            $stmt->execute([$this->email, $this->password]);
            $data = $stmt -> fetch(PDO::FETCH_ASSOC);
            
            if ($stmt->rowCount() > 0) {
            
                $_SESSION['name'] = $data['first_name'];
                // echo "<pre>";
                // print_r($_SESSION['name']);
                // echo "</pre>";
                echo"<script>alert('successfully');document.location='../pages/landingpage.php'</script>";
            } else {
                echo"<script>alert('incorrect inputs');document.location='../pages/signin.php'</script>";
            }
        }


        public function loginAdmin() { 
            $conn = new Database();

            $sql = "SELECT * FROM `admin` WHERE email = ? AND password = ?;";
            $stmt =  $conn->connect()->prepare($sql);
            $stmt->execute([$this->email, $this->password]);
            $admin = $stmt -> fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                
                $_SESSION['name'] = $admin['first_name'];

                echo"<script>alert('successfully');document.location='../pages/dashboard.php'</script>";
            } else {
                echo"<script>alert('incorrect inputs');document.location='../pages/signin.php'</script>";
            }
        }
        

        public function logOut() {
            if (isset($_SESSION['name'])) {
                session_destroy();
                // unset($_SESSION['name']);
                // header('location:../pages/signin.php');
                echo"<script>alert('successfully');document.location='../pages/signin.php'</script>";
             }
        }
        
        
        public function getSpectateur($id){
        }
        public function updateSpectateur($id){
        }
        public function deleteSpectateur($id){
        }

    }
    
?>