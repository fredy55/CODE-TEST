<?php 

//Awards based on DOB

function getAward(string $dob):string 
{
   $chk = explode('-', $dob);

   if(strlen($chk[0])!= 2 || strlen($chk[1])!= 2 || strlen($chk[2])!= 4){
     return -1;
   }
   
   
   $str = str_replace('-', '', $dob);
   $arr = str_split($str);
   $len = count($arr);

   $award = 0;

   for ($i=0; $i < $len; $i++) { 
      $award += $arr[$i];
   }

   return '$'.$award;

}

echo getAward('19-12-1979');