<?php 

/**
 * @param String $s
 * @return Boolean
 */
function isValid($s) {
    //Creat an array of matching brackets
    $matchBrkt = [
        ')' => '(', 
        '}' => '{',
        ']' => '[' 
    ];
    $strStack = []; //Matching brkt stack
    $strln = strlen($s); //String array length

    for ($n=0; $n < $strln; $n++) { 
        $strChar = $s[$n]; //Single string

        if (in_array($strChar, ['(', '{', '['])) {
            array_push($strStack, $strChar);
        } 
        elseif (in_array($strChar, [')', '}', ']'])) {
            //Is matching open brkt found?
            if(empty($strStack) || $strStack[count($strStack) - 1] !== $matchBrkt[$strChar])
                return false;
            
            //Remove open bracket
            //array_pop($strStack);
            array_slice($strStack,  0, count($strStack) - 1);
        } 
    }

    return empty($strStack);
}

$s = "()";
echo isValid($s);
// echo '<pre>';
// print_r(isValid($s));
// echo '</pre>'; 