<!-- https://www.codewars.com/kata/577bd026df78c19bca0002c0 -->
<?php

function disemvowel(string $s): string  {
    $vocals = ["a","e","i","o","u","A","E","I","O","U"];
    return str_replace($vocals, "", $s);
}

echo disemvowel("This website is for losers LOL!");

?>