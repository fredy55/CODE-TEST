<?php 

//Staircase problem

function staircase($n) {
    // Write your code here
    $hash = '#';
    $row = '';

    for ($i=0; $i < $n; $i++) { 
        $spaces = str_repeat(' ', $n-($i+1));
        $row .= $hash;

        //echo "{$spaces}{$row}\n";
        echo "{$spaces}{$row}<br>";
    }
}

staircase(10);


