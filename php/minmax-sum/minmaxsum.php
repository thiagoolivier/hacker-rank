<?php

$arr = array(1, 2, 3, 4, 5);

function minMaxSum ($arr)
{
    
    $minNumber = $arr[0];
    $maxNumber = $arr[0];

    foreach ($arr as $item) {
        
        if($item < $minNumber) {
            $minNumber = $item;
        }

        if($item > $maxNumber) {
            $maxNumber = $item;
        }

    }

    
}


?>