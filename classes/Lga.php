<?php
    error_reporting(E_ALL);
    require_once "Db.php";

    class Lga extends Db{
        private $dbconn;

        public function __construct(){
            $this->dbconn = $this->connect();
        }

        public function fetch_lga(){
            $sql = "SELECT * FROM lga";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        }

        public function fetch_party(){
            $sql = "SELECT * FROM party";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        }

   }

    // $lga = new State;

    // $data = $lga->fetch_lga_by_stateid(10);

    // print_r($data)
;
?>
