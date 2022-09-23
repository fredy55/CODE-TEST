<?php 
 
 //
function maxCities(array $cities, array $distances)
{
    $travelArr = array_combine($cities, $distances);
    ksort($travelArr);
    sort($cities);
    sort($distances);
    $firstCity = $cities[0];
    $curDis = $travelArr[$firstCity];
    $cityCount = 0;
    $count = 0;

    //return $curDis;

    foreach($travelArr as  $dist => $city){
        
        if($dist>$curDis){
            $cityCount++;

            //echo "{$city}({$cityCount}) => ";
        }
        $count++;
        //echo "{$city} => {$dist}  => {$cityCount} => {$curDis} => {$dist}<br>";
    }

    //return $cityCount;
}

 $cities = ['Tucson', 'Albony', 'Smith', 'Westford','Berkeley'];
 $distances = [102, 95, 234, 1243, 50];

//  echo '<pre>';
//  print_r(maxCities($cities, $distances));
//  echo '</pre>';

echo maxCities($cities, $distances);
 //maxCities($cities, $distances);