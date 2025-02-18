<?php

// Ivern Bryant Buala - BSIT 3 B1 - AppDev
// All answered are screenshot in this folder.

// QUESTION 1
// What is the output of print_r($person);?
// class Person {
//     public $name;

// }
// $person = new Person();
// $person -> name = "Alice";
// $person -> age = 25;
// print_r($person);


// QUESTION 2
// What is the Output of var_dump($person);?
// var_dump($person);


// QUESTION 3
// What is the output of var_dump($cashOnHand);?

// $name = 'Brad';
// $age = 40;
// $hasKids = true;
// $cashOnHand = 10.5;
// var_dump($cashOnHand);

// QUESTION 4
// What character is used to concatenate strings?

// echo "$name is $age years old";
// echo "${name} is ${age} years old";
// echo '<h3>' . $name . 'is' . $age . ' years old</h3>';
// echo "We use the character '.' to concatenate strings."


// QUESTION 5
// What is the output of echo HOST;?

// define('HOST', 'localhost');
// define('USER', 'root');
// echo HOST;

// QUESTION 6
// How will you define in PHP the variable PI with value 3.1416?

// define('PI', '3.1416');
// echo PI;


// QUESTION 7
// What is the output of echo $numbers[3] + $numbers[4];?

// $numbers = [1, 2, 3, 4, 5];
// $colors = ["red", "green", "blue"];

// No. 7
// echo $numbers[3] + $numbers[4];
// = 9

// QUESTION 8
// What is the output of echo $colors[3];?
// = Error because there's no index 3, only max 2.

// No.8
// echo $colors[3];


// QUESTION 9
// What are the keys in $person array?
// $person = [
//     "first_name" => "John",
//     "last_name" => "Doe",
//     "age" => 30
// ];
// echo $person["first_name"];
// print_r($person);

// The keys are: first_name, last_name, and the age.

// QUESTION 10
// In Php, how will you change the green into white in $colors array?
// With the use of Associative Array:

// $colors = ["red", "green", "blue"];
// $colors[1] = "white";

// print_r($colors);


// QUESTION 11
// What is the output of echo $hex['red'];?

// $hex = [
//     'red' => 'f00',
//     'green' => '#0f0',
//     'blue' => '#00f',
// ];
// echo $hex['red'];


// QUESTION 12
// What is the output of echo $matrix[1][2];?
// $matrix = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9]
// ];

// echo $matrix[1][2];


// QUESTIONS 13 & 14

$person1 = [
    'first_name' => 'Maeve',
    'last_name' => 'Reid',
    'email' => 'reid@gmail.com',
];


$person2 = [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
];


$people = [
    $person1, $person2 = [
        'first_name' => 'Maeve',
        'last_name' => 'Reid',
        'email' => 'reid@gmail.com',
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com',
    ],
];

// Q13 - What is the output of echo $people[0]['first_name'];?
// echo $people[0]['first_name'];

// Q14 - What is the output of echo $people[2]['email'];?
// echo $people[2]['email'];


// Q15 - What is the output of var_dump($chunkedArray);?
$fruits = ['apple', 'banana', 'orange'];
$chunkedArray = array_chunk($fruits, 2);

var_dump($chunkedArray);

?>