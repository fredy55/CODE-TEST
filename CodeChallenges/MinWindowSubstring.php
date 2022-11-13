<?php 

function MinWindowSubstring($strArr) {
  $strtext = str_split($strArr[0]);
  $substr = str_split($strArr[1]);


  // code goes here
  echo '<pre>';
  print_r($substr);
  echo '</pre>';
  //return $strArr;

}
   
// keep this function call here 
$strArr = array("aaffhkksemckelloe", "fhea"); 
echo MinWindowSubstring($strArr);  