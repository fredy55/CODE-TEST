<?php 

function gradingStudents($grades) {
    $roundGrade = [];

    foreach ($grades as $grade) {
        if($grade > 100 || $grade < 0) continue;
        if($grade < 38){
            array_push($roundGrade, $grade);
            continue;
        }

        $gradeMod = $grade % 5;
        $minMult = $grade - $gradeMod;
        $maxMult = $minMult + 5;

        if($gradeMod >=3){
            array_push($roundGrade, $maxMult);
        }elseif($gradeMod < 3){
            array_push($roundGrade, $grade); 
        }
    }

    return $roundGrade;
}

$grades = [4, 73, 67, 38, 33];
echo '<pre>';
print_r(gradingStudents($grades));
echo '</pre>';