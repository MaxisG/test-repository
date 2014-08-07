github put it on


/**
Bizz-Buzz. Game rules: count from 1 to 100. If a number is divisible by 3, say Bizz instead of the number. If a number is divisible by 5, say Buzz instead of the number. If the number is divisible by both 3 and 5, say Bizz-Buzz.
**/

function bizzBuzz() {

    for($i = 1; $i <= 100; $i++){
        if($i % 15 == 0){
            echo "Bizz-Buzz" . PHP_EOL;
        } elseif(($i % 3) == 0){
            echo "Bizz" . PHP_EOL;
        } elseif(($i % 5) == 0){
            echo "Buzz" . PHP_EOL;
        } else {
            echo "$i" . PHP_EOL;
        }
    
    }
}

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
        }  elseif(($guess * $guess) > $num){
            $high = $guess;
        } else {
            $low = $precision;
        }
        
    }
    return $guess;
    
}
