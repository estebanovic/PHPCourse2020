<?php

// Create array
// $fruits = ["Banana", "Apple", "Orange"];

// // Print the whole array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Get element by index
// echo $fruits[0] . '<br>';

// // Set element by index
// // $fruits[0] = "Peach";

// // echo '<pre>';
// // var_dump($fruits);
// // echo '</pre>';

// // Check if array has element at index 2
// // echo '<pre>';
// // var_dump(isset($fruits[2]));
// // echo '</pre>';

// // Append element
// $fruits[] = "Peach";
// // echo '<pre>';
// // var_dump($fruits);
// // echo '</pre>';

// // Print the length of the array
// echo count($fruits).'<br>';

// // Add element at the end of the array
// array_push($fruits, "Peach");

// // echo '<pre>';
// // var_dump($fruits);
// // echo '</pre>';

// // Remove element from the end of the array
// array_pop($fruits);

// // echo '<pre>';
// // var_dump($fruits);
// // echo '</pre>';

// // Add element at the beginning of the array
// array_unshift($fruits, "Apple");

// // Remove element from the beginning of the array
// array_shift($fruits);

// // Split the string into an array
// $string = "Banana,Apple,Peach";

// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

// // Combine array elements into string
// echo implode("&", $fruits).'<br>';
// // print_r($fruits);

// // Check if element exist in the array
// var_dump(in_array("Apple", $fruits));

// // Search element index in the array
// echo '<br>'.array_search("Orange", $fruits);

// // Merge two arrays
// $vegetables = ['Potato','Cucumber'];
// echo '<pre>';
// var_dump(array_merge($fruits,$vegetables));
// var_dump([...$fruits,...$vegetables]);
// echo '</pre>';

// // Sorting of array (Reverse order also)
// sort($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Filter, map, reduce of array
// $numbers = [1,2,3,4,5,6,7,8];
// $evens = array_filter($numbers, fn($n) => $n % 2 === 0);
// echo '<pre>';
// var_dump($evens);
// echo '</pre>';

// $squares = array_map(fn($n) => $n * $n, $numbers);
// echo '<pre>';
// var_dump($squares);
// echo '</pre>';

// echo array_reduce($numbers, fn($carry, $item) => $carry + $item);

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];

// Get element by key
echo $person["name"].'<br>';
echo $person["age"].'<br>';

// Set element by key
$person["channel"] = "TraversyMedia";

// Check if array has specific key
var_dump(isset($person["age"]));
var_dump(isset($person["addres"]));

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person); //sort by key
// krsort($person); //sort by key in reverse 
// asort($person); //sort by values 
// rasort($person); //sort by values reverse
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todoItems = [
    ["title" => "item 1", "complete" => true],
    ["title" => "item 2", "complete" => false],
    ["title" => "item 3", "complete" => true]
];

echo '<pre>';
var_dump($todoItems);
echo '</pre>';