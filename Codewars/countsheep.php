<!-- KATA NAME If you can't sleep, just count sheep!! -->

<?php function countsheep($num){
      $result = "";
      for ($i = 1; $i <= $num; $i++)  $result .= $i." sheep...";
      
      return $result;
}


// print_r( countsheep(1)); 
      print_r(countsheep(2)); 
    //   print_r( countsheep(3));


    //BETTER SOLUTION WITH RECURSION

    // function countsheep($num){  
    //     return $num == 0 ? "" : countsheep($num - 1)."$num sheep...";
    //   }