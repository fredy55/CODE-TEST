<?php 

function BracketMatcher($str) {
  $strArr = str_split($str);

  $obrkt = 0;
  $cbrkt = 0;

  foreach ($strArr as $value) {
     if($value === '(') $obrkt++;
     if($value === ')') $cbrkt++;

     if($cbrkt > $obrkt) return 0;
  }

  if($obrkt === 0 && $cbrkt === 0) return 1;
  if($obrkt === $cbrkt) return 1;
  if($obrkt !== $cbrkt) return 0;


  echo '<pre>';
  print_r($strArr);
  echo '</pre>';
  // code goes here
  //return $str;

}
   
// keep this function call here
$str = "the color re(d))()(()";  
echo BracketMatcher($str);