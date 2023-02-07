<?php

/*
Function description: takes an array of integers and outputs the 
sum without the maximum value and another without the mininum value. 
*/

//sample arrays (call the function parsing them).
$arr1 = array(5,5,5,5,5);
$arr2 = array(1,2,3,4,5);
$arr3 = array(10,30,50,60,90);
$arr4 = array(140638725,436257910,953274816,734065819,362748590);


function minMaxSum ($arr)
{
    $maxNumber = max($arr);
    $minNumber = min($arr);
    
    $maxTotal = array_sum($arr) - $maxNumber;
    $minTotal = array_sum($arr) - $minNumber;
     
    echo $maxTotal."&nbsp";
    echo $minTotal;
    
}


minMaxSum($arr4);


?>