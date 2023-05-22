<?php 

function TreeConstructor($strArr) {
  $parent = [];
  $child = [];

  foreach ($strArr as $value) {
    $value = str_replace("(", "", $value);
    $value = str_replace(")", "", $value);
    $value = explode(",", $value);

    $parent[$value[1]][] = $value[0];

    if(count($parent[$value[1]]) > 2){
      return 'false';
    } 

    $child[$value[0]][] = $value[1];

    if(count($child[$value[0]]) > 1){
      return 'false';
    }

  }

  return 'true';

  //var_dump($parent);
  //return $strArr;
  // echo '<pre>';
  // print_r(count($child));
  // echo '</pre>';

}
   
// keep this function call here 
//$strArr = array("(1,2)", "(2,4)", "(5,7)", "(7,2)", "(9,5)");
$strArr  = array("(2,5)", "(2,6)"); 
echo TreeConstructor($strArr);  
