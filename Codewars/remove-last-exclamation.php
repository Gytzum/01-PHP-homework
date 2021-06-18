//KATA NAME REMOVE LAST EXCLAMATION

<?php function remove(string $s): string {
    if (substr($s, -1) == '!' ) {return substr($s, 0, -1);
    } else return $s;}




