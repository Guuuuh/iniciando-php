<?php

$array = array(40,200,100,150,"School of Net",true);
//declaração flexível
$array = array(
    40,
    200,
    100,
    150,
    "School of Net",
    true
);

//echo $array;

//echo array(40,200,100,150,"School of Net",true);

echo $array[0];
echo $array[1];

echo array(40,200,100,150,"School of Net",true)[4];

//Melhor maneira
$array1 = [
    45,
    210,
    110,
    160,
    "School of Ne1111111t",
    false
];

$array1[3];

//Teste
for ($i = 0; $i < count($array1); $i++) {
    echo $array1[$i];
    echo "\n";
}