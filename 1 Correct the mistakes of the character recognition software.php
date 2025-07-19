<!-- https://www.codewars.com/kata/58c8e1c2a7f31af03600008f -->
<!-- https://www.codewars.com/kata/577bd026df78c19bca0002c0 -->
<!-- http://localhost/katas-php/ -->
<?php
function correct($string) {
    $stringArray = str_split($string);
    $diccionary = [
        "0" => "O",
        "5" => "S",
        "1" => "I",
    ];
    $stringFinal = "";
    foreach ($stringArray as $key => $value) {
        if(isset($diccionary[$value])) {
            $stringFinal.=$diccionary[$value];
        } else {
            $stringFinal.=$value;
        }
    }
    // echo $stringFinal;
    return $stringFinal;
}

correct("51NGAP0RE");



// otras solucciones 

// function correct($string) {
//   return str_replace(["5", "0", "1"], ["S", "O", "I"], $string);
// }

?>