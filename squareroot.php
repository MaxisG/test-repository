<html>
<head><title>Square Root Calculator</title></head>
<body>
<?php
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
            $guess = round($guess,$precision);
            $closeEnough = true;
        } elseif((round($guess,$precision) == $high) || (round($guess,$precision) == $low)){
                if(($guess * $guess) > $num){
                        $guess = $low;
                } else {
                        $guess = $high;
                }
                $closeEnough = true;

        } elseif(($guess * $guess) > $num){
            $high = round($guess,$precision);
        } else {
            $low = round($guess,$precision);
        }

    }
    return $guess;

}

$theRoot = mySqrRt(10,4);
echo $theRoot;
?>
</body>
</html>
