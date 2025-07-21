<!-- https://www.codewars.com/kata/57cff961eca260b71900008f/train/php -->
<?php
function isVow(array $a): array{

    $collection = [
        "97"=> "a",
        "101"=> "e",
        "105"=> "i",
        "111"=> "o",
        "117"=> "u"
    ];
    $arrayFinal = [];

    foreach ($a as $key => $value) {
        if(isset($collection[$value])) {
            array_push($arrayFinal, $collection[$value]);
        } else {
            array_push($arrayFinal, $value);
        }
    }

    return $arrayFinal;
}

print_r(isVow([100,100,116,105,117,121]));

// otras soluciones
//    $vowelMap = [
//         97 => 'a',
//         101 => 'e',
//         105 => 'i',
//         111 => 'o',
//         117 => 'u'
//     ];

//     return array_map(fn($num) => $vowelMap[$num] ?? $num, $arr);
?>