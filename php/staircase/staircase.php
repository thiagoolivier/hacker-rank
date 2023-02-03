<?php

/*
takes an integer value to define the height 
and base of the staircase, then prints hash symbols 
as for a staircase. The white spaces are left aligned. 
*/

function staircase($n) {

    for ($i = 1; $i <= $n; $i++) {
        echo str_pad(
            str_repeat("#", $i),
            $n,
            " ",
            STR_PAD_LEFT
        ) . "\n";
    }
    
}

staircase(64); //insert the staircase size

?>