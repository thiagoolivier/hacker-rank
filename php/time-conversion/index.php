<?php

$input = "01:01:00PM";

if (str_contains($input, "PM"))
{
    $woLetters = substr($input, 0, 8);

    $hour = (string)(substr($input, 0, 2) + 12);
    
    if($hour === '24') {
        $hour = '00';
    }

    echo substr_replace($woLetters, $hour, 0, 2);
}


?>