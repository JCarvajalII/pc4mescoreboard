<?php
include_once 'connectDB.php';
function getOpenPercentage($num){
    $grade = 100;
    $openThreshold = 15;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade;
    }else if($num == $openThreshold) {
        $percentage = $grade/2;
    }else {
        $percentage = round($grade-(($num/$openThreshold)*50));
    }
    if ($percentage < 50){
        return $percentage . "% " ."<ion-icon name=\"alert\" style=\"color:red;\"></ion-icon>";
    }else if($percentage > 50){
        return $percentage . "% " ."<ion-icon name=\"happy\" style=\"color:green;\"></ion-icon>";
    }else {
        return $percentage . "% " ."<ion-icon name=\"warning\" style=\"color:yellow;\"></ion-icon>";
    }
}

function getPickUpPercentage($num){
    $grade = 100;
    $pickUpThreshold = 15;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade;
    }else if($num == $pickUpThreshold) {
        $percentage = $grade/2;
    }else {
        $percentage = round($grade-(($num/$pickUpThreshold)*50));    
    }
    if ($percentage < 50){
        return $percentage . "% " ."<ion-icon name=\"alert\" style=\"color:red;\"></ion-icon>";
    }else if($percentage > 50){
        return $percentage . "% " ."<ion-icon name=\"happy\" style=\"color:green;\"></ion-icon>";
    }else {
        return $percentage . "% " ."<ion-icon name=\"warning\" style=\"color:yellow;\"></ion-icon>";
    }
}

function getOverduePercentage($num){
    $grade = 100;
    $overdueThreshold = 0;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade;
    }else {
        $percentage = round($grade-(($num*5)+100));
    }
    if ($percentage < 50){
        return $percentage . "% " ."<ion-icon name=\"alert\" style=\"color:red;\"></ion-icon>";
    }else if($percentage > 50){
        return $percentage . "% " ."<ion-icon name=\"happy\" style=\"color:green;\"></ion-icon>";
    }else {
        return $percentage . "% " ."<ion-icon name=\"warning\" style=\"color:yellow;\"></ion-icon>";
    }
}

function getRMAPercentage($num){
    $grade = 100;
    $rmaThreshold = 5;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade;
    }else {
        $percentage = round($grade-(($num/$rmaThreshold)*50));
    }
    if ($percentage < 50){
        return $percentage . "% " ."<ion-icon name=\"alert\" style=\"color:red;\"></ion-icon>";
    }else if($percentage > 50){
        return $percentage . "% " ."<ion-icon name=\"happy\" style=\"color:green;\"></ion-icon>";
    }else {
        return $percentage . "% " ."<ion-icon name=\"warning\" style=\"color:yellow;\"></ion-icon>";
    }
}

function getOrderedPartsPercentage($num){
    $grade = 100;
    $orderedPartsThreshold = 5;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade;
    }else {
        $percentage = round($grade-(($num/$orderedPartsThreshold)*50));
    }
    if ($percentage < 50){
        return $percentage . "% " ."<ion-icon name=\"alert\" style=\"color:red;\"></ion-icon>";
    }else if($percentage > 50){
        return $percentage . "% " ."<ion-icon name=\"happy\" style=\"color:green;\"></ion-icon>";
    }else {
        return $percentage . "% " ."<ion-icon name=\"warning\" style=\"color:yellow;\"></ion-icon>";
    }
}

?>
