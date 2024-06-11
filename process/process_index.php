<?php
session_start();
require_once "../classes/Unit.php";
if($_POST["btn"]){
   if($_POST["name"]){
        $polling = $_POST["name"];
        

    }else{
        echo "Please provide a polling unit";
        header("location:../index.php");
        exit();
    }
    
        $poll = new Unit;


        $check = $poll->search_polling_unit($polling);

        // print_r($check);
        // die();

        if($check){
            $_SESSION['named'] = $check;
            header("location:../index.php"); exit();
        
        }else{
            $_SESSION['errormsg3'] = 'Polling unit not found';
            header("location:../index.php"); exit();
        }




}else{
    echo "Please visit the Page";
}
?>