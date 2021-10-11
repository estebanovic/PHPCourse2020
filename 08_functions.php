<?php

// Function which prints "Hello I am TheCodeholic"

function hello($name) {
    echo 'Hello I am '.$name.'<br>';
}

hello('TheCodeholic');
hello('Esteban');
hello('TheNetNinja');

// Create sum of two functions

// function sum ($a, $b) {
//     return $a + $b;
// }
// $sum = sum(4, 5);
// echo $sum;

// Create function to sum all numbers using ...$nums

function sum (...$numbers) {
    $sum = 0;
    foreach ($numbers as $num) $sum += $num;
    return $sum;
}

$sum = sum(1, 2, 3, 4, 5);
echo $sum;

// Arrow functions


