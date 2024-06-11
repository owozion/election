<?php
session_start();
require_once "../classes/Unit.php";
if($_POST["btn"]){
   if($_POST["lga"] && $_POST["party"]){
        $lga = $_POST["lga"];
        $party = $_POST["party"];


    }else{
        echo "All fields are required";
        header("location:../total.php");
        exit();
    }
    
        $poll = new Unit;
        $check = $poll->fetch_total_result($lga, $party);

        if($check){
            foreach ($check as $subArray) {
         
            }
        }
            
        // print_r($subArray);
        // print_r($check);
        // die();

        if(isset($subArray)){
            $_SESSION['lganamed'] = $subArray;
            // print_r($subArray);
            header("location:../total.php"); exit();
        
        }else{
            $_SESSION['errormsg'] = 'Result not found';
            header("location:../total.php"); exit();
        }

}else{
    echo "Please visit the Page";
}
?>
