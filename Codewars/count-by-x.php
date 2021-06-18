<!-- //KATA NAME COUNT BY  X-->

<?php function countBy($x, $n) {
    $z = [];
    for($i =1; $i <= $n; $i++)
      array_push($z,$i*$x);
    return $z;
}


// print_r( countBy(1,5));
print_r( countBy(2,5));


//BETTER SOLUTION 

// function countBy($x, $n) {
//   return range($x, $n * $x, $x);
// }


