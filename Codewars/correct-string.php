//KATA NAME CORRECT SOLUTION.

<?php function correct(string $s){
    $s = str_replace( 5, "S", $s);
    $s = str_replace( 1, "I", $s);
    $s = str_replace( 0, "O", $s);
    return $s;
};


print_r(correct("L0ND0N"));"<br>"; 
      print_r(correct("DUBL1N"));"<br>";
      print_r(correct("51NGAP0RE"));"<br>";
      print_r(correct("BUDAPE5T"));"<br>";
      print_r(correct("PAR15"));"<br>";


        //BETTER SOLUTION 
    //   function correct(string $str): string
    //   {
    //     return str_replace([5, 0, 1], ['S', 'O', 'I'], $str);
    //   }