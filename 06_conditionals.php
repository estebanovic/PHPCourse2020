<?php

$age = 29;
$salary = 30000000;

// if condition
// if($age > 25){
//     echo "You are not young".'<br>';
// }
// if($age < 25){
//     echo "You are young".'<br>';
// }

// if condition - else
// if ($age > 25) {
//     echo "You are not young" . '<br>';
// }else {
//     echo "You are young" . '<br>';
// }

// if condition1 AND condition2
// if ($age < 22 && $salary > 500000){
//     echo 'You are young and very rich'.'<br>';
// }

// if condition1 OR condition2
// if ($age < 22 || $salary > 500000){
//     echo 'You are young or very rich'.'<br>';
// }

// if condition1 - elseif condition2 - else
// if ($age < 22){
//     echo "You are young" . '<br>';
// }elseif ($age < 30){
//     echo "You are not young but not old" . '<br>';
// }elseif ($age < 60){
//     echo "You are old but not too old" . '<br>';
// }else {
//     echo "You are too old" . '<br>';
// };

// if condition1 and condition2 - elseif condition1 and condition2 - else
// if ($age < 22 && $salary >= 500000){
//     echo 'You are young man AND rich!!<br>';
// }elseif ($age < 22 && $salary < 500000){
//     echo 'You are young, and not so rich<br>';
// }elseif($age < 22 && $salary >= 500000){
//     echo 'You are old, but rich<br>';
// }else{
//     echo 'You are old and NOT rich also<br>';
// }

// Ternary if
// echo $age < 22 ? 'Young' : ($age < 30 ? 'Not young but not old' : 'Old');

// Null coalescing operator
// $myAge = $age ? $age : 18;
// echo $myAge;
//7.1
// $myAge = $age ?: 18;
// echo $myAge;

// Null coalescing assignment operator. Since PHP 7.4
// $person = [
//     'name' => 'John'
// ];
// // if(!isset($person['name'])){
// //     $person['name'] = 'Anonymous';
// // }
// $person['name'] ??= 'Anonymous';

// echo $person['name'];
// switch

$userRole = 'admin';

switch ($userRole){
    case 'admin':
       echo 'You are admin' ;
       break;
    case 'editor':
        echo 'You can edit articles';
        break;
    default:
        echo 'Uncknown role';
}