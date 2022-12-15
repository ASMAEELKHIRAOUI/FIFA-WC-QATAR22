<?php 
include_once 'database.class.php';
include_once 'user.class.php';
include_once 'ticket.class.php';

  session_start();

    class Spectateur extends User {
        private $matchsReserved = array();
        //crud

        public  function isExistSpectateur($email){
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
                $_SESSION['last-name'] = $data['last_name'];
                $_SESSION['roll'] = 'spectator';
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
                $_SESSION['last-name'] = $admin['last_name'];
                $_SESSION['id'] = $admin['id'];
                $_SESSION['roll'] = 'admin';

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
        public function getOldReservation()
        {
            //!!!!!!!!!!!!!!modify this content !!!!!!!!!!!!! 

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

        public function setReservation($matchId){
            include_once 'match.class.php';

            $ticket = new Ticket( $this->id ,$matchId);

            // if(!array_search($match , $this->matchsReserved)){
                $ticket->add();
                $this->matchsReserved  =  $ticket->gets();
            // } else echo "this match is alredy reserved";

        }

        public function getMatchsReserved(){
            include_once 'match.class.php';


            $ticket = new Ticket( $this->id );

            $this->matchsReserved  =  $ticket->gets();


            return $this->matchsReserved;
        }


        public function getMatchReserved($matchId){
            include_once 'match.class.php';

            $ticket = new Ticket( $this->id );

            $this->matchsReserved  =  $ticket->get($matchId);


            return $this->matchsReserved;
        }




    }
    
?> 