<?php 
include_once 'database.class.php';
include_once 'user.class.php';
include_once 'ticket.class.php';




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
            include_once 'match.class.php';

            $ticket = new Ticket( $this->id ,$match->getId());

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