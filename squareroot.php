<?php

/**
Square Root. You just found out that the browser used by our most important customer has a flaw: its javascript implementation lacks a square root method. Given an argument which is guaranteed to be a positive integer greater than 3 and a degree of precision, write a function to approximate the square root of the integer to the precision requested.
**/

$answer = mySqrRt(10, 3);
echo $answer; // 3.162

function mySqrRt($num, $precision) {
    if ($num < 4) {
        throw new Exception('out of bounds');
    } 
    $high = $num / 2;
    $low  = 2;
    
    $closeEnough = false;
    while (!$closeEnough) {
        $guess = ($high + $low) / 2;
        if(($guess * $guess) == $num){
            $closeEnough = true;        
        }  elseif((round($guess,$precision) == $high) || (round($guess,$precision) == $low)){
		    if(($guess * guess) > $num){
			    $guess = $low;
		    } else {
			    $guess = $high;
		    }
		    $closeEnough = true;
    	}elseif(($guess * $guess) > $num){
            $high = round($guess,$precision);
        } else {
            $low = round($guess,$precision);
        }
        
    }
    return $guess;
    
}

?>
