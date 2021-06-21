<?php
// remove commas 
$array1 = [
    'v' => 'p',
    'v1' => 'p1',
    'v2' => 'p2',
    'v3' => 'p3',
    'v4' => 'p4',
    'v5' => 'p5'
];

$array2 = [1,2,3,4,5,6];
$result2;
for ($i=0; $i < count($array2); $i++) { 
    $result2 .= $array2[$i].",";
}
$result2 = trim($result2, ',');
// print_r($result2);

$result3;
foreach($array1 as $key => $value){
    $result3 .= $key. '=>'. $value. ', ';
}

// $result3 = rtrim($result3, ', ');

// Arba 

$resultUpdated = trim(trim($result3), ',');
// print_r ($result3);
print_r($resultUpdated);



//go through every second itteration in array with for each loop

$array = [
    'v' => 'p',
    'v1' => 'p1',
    'v2' => 'p2',
    'v3' => 'p3',
    'v4' => 'p4',
    'v5' => 'p5'
];

$result = [];
$index = 0;
foreach ($array as $key=>$value) {
    if ($index % 2 == 0) {
        $result [$key] =  $value;
    }
    $index++;
};

// print_r($result);
