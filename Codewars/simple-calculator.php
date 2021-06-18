//KATA NAME SIMPLE CALCULATOR


<?php function calculator($a, $b, $sign)
{
    if (is_string($a) ||is_string($b)) return "unknown value";
    if (is_numeric($a) && is_numeric($b)) {
        switch ($sign) {
            case "+":
                return $a + $b;
                break;
            case "-":
                return $a - $b;
                break;
            case "/":
                return $a / $b;
                break;
            case "*":
                return $a * $b;
                break;
            default:
                "unknown value";
        }
    }
    return "unknown value";
};