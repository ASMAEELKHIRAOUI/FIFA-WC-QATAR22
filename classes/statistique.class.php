
<?php

include_once 'database.class.php';

class Statistique {
    // private $id  ;

    // public function getStadStatistique(){
    //     return $this->id;
    //  }
    // public function setStadStatistique($idd){
    //     $this->id=$idd;

    // }
    

    // statistique de stad
    public function stadst(){
        $database = new Database();
        $sql="SELECT COUNT(id) FROM stad";   
        $stmt= $database->connect()->prepare($sql);
        $stmt->execute();
        $dbstmt =$stmt->fetchAll(PDO::FETCH_ASSOC); 
        // $this->setStadStatistique($dbstmt);
         return $dbstmt; 
        }
         // statistique pour les  matches
         public function matchst(){

            $database= new Database();
            $sql="SELECT COUNT(id) from matches ";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dtstmt= $stmt->fetchall(PDO::FETCH_ASSOC);
            return $dtstmt;

         }
          // statistique poue user 
          public function userst(){
            $database = new Database();
            $sql="SELECT COUNT(id) FROM spectator";
            $stmt=$database->connect()->prepare($sql);
            $stmt->execute();
            $dtstmt= $stmt->fetchall(PDO::FETCH_ASSOC);
            return $dtstmt;

          }

          // statistique poue les tickets reserver 
           public function ticketreserver(){
                $database = new Database();
                $sql="SELECT COUNT(id) FROM ticket ";
                $stmt=$database->connect()->prepare($sql);
                $stmt->execute();
                $dtstmt= $stmt->fetchall(PDO::FETCH_ASSOC);
                return $dtstmt;


           }

           // pour les ticket disponoble 
           public function ticketdispo(){
            $database = new Database();
            $sql=" SELECT matches.stad as stads , SUM(stad.capacity) as capacitys
            FROM matches 
            INNER JOIN stad ON matches.stad = stad.id ";
            $stmt=$database->connect()->prepare($sql);
            $stmt->execute();
            $dtstmt= $stmt->fetchall(PDO::FETCH_ASSOC);
            return $dtstmt;
        
    
            }        
    }        
    

    
    
?>