<?php 

function BracketCombinations($num) {

  if($num < 2) return 1;

  $combine = 0;

  for ($x = 0; $x < $num ; $x++) { 
    $combine = $combine + BracketCombinations($x) * BracketCombinations($num - $x - 1);
  }

  return $combine;

}
   
// keep this function call here  
$num = 3;
echo BracketCombinations($num); 