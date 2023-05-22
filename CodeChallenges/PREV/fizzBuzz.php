<?php 

function fizzBuzz($n) {
    $result = [];

    for ($i=1; $i < $n+1; $i++) { 
        $a = $i % 3 === 0;
        $b = $i % 5 === 0;

        if($a && !$b){
            $result[$i] = 'Fizz'; 
        }
        if(!$a && $b){
            $result[$i] = 'Buzz'; 
        }

        if($a && $b){
            $result[$i] = 'FizzBuzz'; 
        }

        if(!$a && !$b){
            $result[$i] = strval($i); 
        }
    }

    return $result;
}


$n = 20;

echo '<pre>';
print_r(fizzBuzz($n));
echo '</pre>';
