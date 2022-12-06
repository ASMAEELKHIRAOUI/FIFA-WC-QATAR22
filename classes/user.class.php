<?php
include_once 'database.class.php';

    abstract class User extends Database{
        protected $id = NULL;
        protected $firstName;
        protected $lasttName;
        protected $password;
        protected $email;
        protected $roll;

        public function __construct ($fn , $ln , $pas , $emi , $roll)
        {
            $this->id = NULL;
            $this->firstName = $fn;
            $this->lasttName = $ln;
            $this->password = $pas;
            $this->email = $emi;
            $this->roll = $roll;
        }


        public function setFirstName($fn){
            $this->firstName = $fn;
        }
        public function setLastName($ln){
            $this->lasttName = $ln;
        }
        public function setPassword($pas){
            $this->password = $pas;
        }
        public function setEmail($emi){
            $this->email = $emi;
        }
        public function setRoll($roll){
            $this->roll = $roll;
        }


        public function getFirstName(){
            return $this->firstName ;
        }
        public function getLastName(){
            return $this->lasttName  ;
        }
        public function getPassword(){
            return $this->password  ;
        }
        public function getEmail(){
            return $this->email  ;
        }
        public function getRoll(){
            return $this->roll  ;
        }











        
        public function getObject($dbObject){
            $this->id = $dbObject->id;
            $this->firstName = $dbObject->first_name;
            $this->lasttName = $dbObject->last_name;
            $this->password = $dbObject->password;
            $this->email = $dbObject->email;
        }

        public static function viewLandingPage(){
            echo "test landing page";
        }

    }


    // User::viewLandingPage();







?>