<?php
error_reporting(E_ALL);
require_once "Db.php";

class Unit extends Db{

    private $dbconn;

    public function __construct()
    {
        $this->dbconn=$this->connect();
    }


    public function search_polling_unit($polling){
        $sql = "SELECT * FROM polling_unit JOIN announced_pu_results ON polling_unit.polling_unit_id=announced_pu_results.polling_unit_uniqueid WHERE polling_unit_name LIKE?";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute(["%$polling%"]);
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }

//     public function search_polling_unit_by_lga($polling){
//         $sql = "SELECT * FROM lga JOIN polling_unit ON lga.lga_id=polling_unit.uniqueid
// JOIN announced_pu_results ON lga.lga_id=announced_pu_results.polling_unit_uniqueid WHERE lga_name LIKE?";
//         $stmt = $this->dbconn->prepare($sql);
//         $stmt->execute(["%$polling%"]);
//         $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
//         return $result;
//     }

    public function fetch_total_result($lga, $party){
    $sql = "SELECT SUM(party_score) FROM lga JOIN announced_pu_results ON lga.lga_id=announced_pu_results.polling_unit_uniqueid WHERE lga_id=? AND party_abbreviation=?;"; 
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$lga, $party]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    }
}
?>