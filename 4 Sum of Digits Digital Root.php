<!-- https://www.codewars.com/kata/541c8630095125aba6000c00/train/php -->
<?php

function digital_root($number): int{
    $str_num = strval($number);
    $sum = 0;
    for ($i=0; $i < strlen($str_num) ; $i++) {
        $sum += intval($str_num[$i]);
    }
    if(strlen(strval($sum)) >= 2 ) {
        return digital_root($sum);
    } else {
        return $sum;
    }
}

echo digital_root(16)."  es igual a 7";
echo "<hr>";
echo digital_root(195)."  es igual a 6";


// respuestas interesantes
// function digital_root($number): int
// {
//   do {
//       $digit = 0;
//       foreach (str_split((string) $number) as $item) {
//           $digit += $item;
//       }
//       $number = $digit;
//   } while($number > 9);
//   return $number;
// }

?>