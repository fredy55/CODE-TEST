<?php 
 
 //timeConversion

 function timeConversion($s) {
    // Write your code here
    $tstamp = strtotime($s);
   

    return date("H:i:s", $tstamp);
}

$s = "1:06:00PM";
//echo strtotime();
echo timeConversion($s);