<?php

/*this code is working for the following array format. 
I've created a new file called "diagonal-difference-testing.php" to test a different format of array.*/

$data = array(
    0 => array(1,2,3),
    1 => array(4,5,6),
    2 => array(9,8,9),
);


function diagonalDifference($array) {

    $arraySize = count($array);
    $leftToRight = 0;
    $rightToLeft = 0;

    for ($i = 0; $i <= $arraySize-1; $i++) {
        $leftToRight += $array[$i][$i];
    }


    $j = $arraySize-1;

    for ($i = 0; $i <= $arraySize-1; $i++) {
        $rightToLeft += $array[$i][$j];
        $j--;
    }

    return abs($leftToRight-$rightToLeft);

}

echo diagonalDifference($data);

?>