<?php 
    class stad{
        private $id = NULL;
        private $name;
        private $capacity;
        private $location;
        private $city;
        private $image;

        public function __construct($name , $capacity , $location , $city , $image)
        {
            $this->name = $name;
            $this->capacity = $capacity;
            $this->location = $location;
            $this->city = $city;
            $this->image = $image;
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
    }



?>