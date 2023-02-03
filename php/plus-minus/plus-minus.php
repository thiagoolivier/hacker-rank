<?php

/* Description: this function takes an array of integers, and prints the proportion of positive, negative and zeros inside. */ 


$arrayExample = array(-2, -1, 0, 1, 2);


function plusMinus($arr) {
    
    $positive = 0;
    $zeros = 0;
    $negative = 0;
    $arrSize = count($arr);
    
    foreach ($arr as $num)
    {
        if ($num > 0) {
            $positive += 1;
        } else if ($num < 0) {
            $negative += 1;
        } else {
            $zeros += 1;
        }
    }
    
    echo number_format($positive/$arrSize, 6)."\n";
    echo number_format($negative/$arrSize, 6)."\n";
    echo number_format($zeros/$arrSize, 6);

}

plusMinus($arrayExample);


?>