<?php 

$arr = ["data"=>"key=IAfpK, age=58, key=WNVdi, age=64, key=jp9zt, age=47"];

$arr = json_decode($data, true);
  $strarr = explode(',', $arr['data']);
  

  $count = 0;

  foreach($strarr as $k => $v){
     $val = explode('=', $v);

     if($val[0] === 'age' && (int)$val[1] >= 50){
       $count++;
     }
  }


  return $count;