<?php
include_once 'database.class.php';
 class Reservation {

       public $team1;
       public $team2;
       public $prices;
       public $names;






    
     public function getreservation(){ 
        $database =  new  Database();
        $sql="SELECT ticket.*,team1.country as country1 ,team2.country as country2 ,spectator.first_name as names ,
          matches.price as prices 
         FROM `ticket` 
         INNER join spectator on spectator.id = ticket.user_id 
         INNER join matches on matches.id = ticket.match_id 
         INNER join team team1 on team1.id = matches.match_team1
          INNER join team team2 on team2.id = matches.match_team2";
        

       $stmt=$database->connect()->prepare($sql);
       $stmt->execute();
       $dbstmt=$stmt->fetchall(PDO::FETCH_ASSOC);

       return $dbstmt;   
            
    }


  }
  
  




 









?>