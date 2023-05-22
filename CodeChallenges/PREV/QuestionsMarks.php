<?php 

function QuestionsMarks($str) {
  $num = null;
  $quesmrk = 0;
  $isValid = 'false';
  
  $str = str_split($str);

  foreach ($str as $v) {
    if($num === null){
        if (is_numeric($v)) {
            $num = $v;
        }
        continue;
    }

    if ($v === '?') {
        $quesmrk++;
        continue;
    }

    if(is_numeric($v)){
        if($num + $v == 10){
            if($quesmrk !== 3){
                return 'false';
            }else{
                $isValid = 'true';
            }
        }
        $num = $v;
        $quesmrk = 0;
    }
    
  }
  
  // code goes here
  return $isValid;

}
$str = "5??aaaaaaaaaaaaaaaaaaa?5?a??5";
//$str = "9???1???9??1???9";
echo QuestionsMarks($str);