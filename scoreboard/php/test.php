<?php
include_once 'connectDB.php';
function getOpenPercentage($num){
    $grade = 100;
    $openThreshold = 15;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade;
    }else {
        $percentage = $grade + (($openThreshold - $num)*5);
        
    }
    return $percentage;
}

function getPickUpPercentage($num){
    $grade = 100;
    $pickUpThreshold = 15;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade;
    }else {
        $percentage = $grade + (($pickUpThreshold - $num)*5);
    }
    return $percentage;
}

function getOverduePercentage($num){
    $grade = 100;
    $overdueThreshold = 0;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade;
    }else {
        $percentage = $grade + (($overdueThreshold - $num)*5);
        
    }
    return $percentage;
}

function getRMAPercentage($num){
    $grade = 100;
    $rmaThreshold = 5;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade; 
    }else {
        $percentage = $grade + (($rmaThreshold - $num)*5);
        
    }
    return $percentage;
}

function getOrderedPartsPercentage($num){
    $grade = 100;
    $orderedPartsThreshold = 5;
    $percentage = 0;
    if($num == 0){
        $percentage = $grade;
    }else {
        $percentage = $grade + (($orderedPartsThreshold - $num)*5);
        
    }
    return $percentage;
}

?>
