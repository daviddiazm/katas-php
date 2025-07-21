<?php
$str = 'hola';
echo substr($str,0, 2);
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;

echo "<hr>";
var_dump(count($a));

echo "<hr>";
echo strlen($str); 

echo "<hr>";
echo strpos($str, 'a');

echo "<hr>";
$array = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green",2, 4);
$resultado = array_merge($array, $array2);
print_r($resultado);

echo "<hr>";
echo in_array(2, $array );

echo "<hr>";
print_r($array);
asort($array);
print_r($array);

?>