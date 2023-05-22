<?php 

function CodelandUsernameValidation($str) {
  $len = strlen($str);
  $strArr = str_split($str);
  $vpattern  = "/[a-z0-9_]/i";

  if(preg_match($vpattern, $str) === 0) return 'false';

  if($len<=4 || $len>=25) return 'false';

  if($strArr[0] === '_' || $strArr[$len - 1] === '_') return 'false';

  return 'true';
}

//$str = "u__hello_world123";
$str = "aa_";
echo CodelandUsernameValidation($str);