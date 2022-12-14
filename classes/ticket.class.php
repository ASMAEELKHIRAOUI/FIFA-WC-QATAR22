<?php
include_once '../classes/database.class.php';

    class Ticket{
        private $id = NULL;
        private $spectateurId;
        private $matchId;


        public function __construct($specId="" , $matchId="")
        {
            $this->spectateurId = $specId;
            $this->matchId = $matchId;
        }

        public function setSpectateurId($specId){
            $this->spectateurId = $specId;
        }
        public function setMatchId($matchId){
            $this->matchId = $matchId;
        }

        //crud 
        public function add(){
            $database = new Database();

            $sql = "INSERT INTO ticket (match_id  , user_id) VALUES (?,?)";
            $stmt= $database->connect()->prepare($sql);
            $stmt->execute([$this->matchId , $this->spectateurId]);
            
        }
        public function gets(){
            $database = new Database();

            $sql = "SELECT *
            FROM ticket
            INNER JOIN matches
            ON ticket.match_id = matches.id
            WHERE user_id=?;
            ;";
            $stmt= $database->connect()->prepare($sql);
            $stmt->execute([$this->spectateurId]);

            $dbMatchsReserved = $stmt->fetchAll(PDO::FETCH_OBJ);

            include_once 'match.class.php';
            $matchsReserved = array();

            $i=0;
            foreach($dbMatchsReserved as $dbMatchReserved){
                $matchsReserved[$i] = new Matches();
                $matchsReserved[$i]->getObject($dbMatchReserved);
                $i++;
            }

            return $matchsReserved;

            



        }
        public function get($matchId){
            $database = new Database();

            $sql = "SELECT *
            FROM ticket
            INNER JOIN matches
            ON ticket.match_id = matches.id
            WHERE user_id=? AND matches.id = ?;
            ;";
            $stmt= $database->connect()->prepare($sql);
            $stmt->execute([$this->spectateurId , $matchId]);

            $dbMatchsReserved = $stmt->fetchAll(PDO::FETCH_OBJ);

            include_once 'match.class.php';
            $matchsReserved = array();

            $i=0;
            foreach($dbMatchsReserved as $dbMatchReserved){
                $matchsReserved[$i] = new Matches();
                $matchsReserved[$i]->getObject($dbMatchReserved);
                $i++;
            }

            return $matchsReserved;

        }
        public function update(){

        }
        public function delete(){

        }

    }















?>