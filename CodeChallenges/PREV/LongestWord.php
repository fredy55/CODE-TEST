<?php 

function LongestWord($sen) {
  $strArr = explode(" ", $sen);
  $maxlen = 0;
  $lstrin = null;
  
  foreach ($strArr as $v) {
     $v = preg_replace("/[^a-z0-9]/i", '', $v);
     $len = strlen($v);

     if(is_null($lstrin)){
        $lstrin = $v;
     }

     if($len > $maxlen){
        $maxlen = $len;
        $lstrin = $v;
     }
  }
  
  return $lstrin;

}
   
// keep this function call here 
//$sen = "fun787&!! time"; 
$sen = "I love dogs";
echo LongestWord($sen);