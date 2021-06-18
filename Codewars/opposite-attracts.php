<?php function lovefunc($flower1, $flower2)
{
$a = $flower1 % 2 ===0;
$b = $flower2 % 2 ===0;

return $a != $b;
}

echo(lovefunc(1, 4));
echo(lovefunc(2, 2));
echo(lovefunc(0, 1));
echo(lovefunc(0, 0));


//OTHER SOLUTION 
// function lovefunc(int $flower1, int $flower2) : bool {
//     return ($flower1 % 2 !== $flower2 % 2);
// }


//OR

