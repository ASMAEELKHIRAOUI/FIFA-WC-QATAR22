<?php 
include_once 'database.class.php';
include_once 'user.class.php';
    class Admin extends User {
        public function  __construct()
        {
            
        }
        public function getAdmin(){
            $sql = "SELECT * FROM `admin`";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $dbAdmin = $stmt->fetch(PDO::FETCH_OBJ);
            parent::getObject($dbAdmin);
        }
    }

    // test
    $admin = new Admin();
    $admin->getAdmin();

    echo "<pre>";
    print_r($admin);
    echo "<pre>";

?>