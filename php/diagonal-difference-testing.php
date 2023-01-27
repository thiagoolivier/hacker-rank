<?php

$data = array(
    0 => 3,
    1 => array(11,2,4),
    2 => array(4,5,6),
    3 => array(10,8,-12),
);

function diagonalDifference($array) {

    $arraySize = $array[0];
    $leftToRight = 0;
    $rightToLeft = 0;

    for ($i = 1; $i <= $arraySize-1; $i++) {
        $leftToRight += $array[$i][$i-1];
    }


    $j = $arraySize-1;

    for ($i = 1; $i <= $arraySize-1; $i++) {
        $rightToLeft += $array[$i][$j];
        $j--;
    }

    $result = json_encode(array(
        "Left to right diagonal" => $leftToRight,
        "Right to left diagonal" => $rightToLeft,
        "Absolute difference" => abs($leftToRight-$rightToLeft)
    ));

    return $result;

}

echo diagonalDifference($data);

?>