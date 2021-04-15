<?php
//arrays are variables that can contain more than values list of values

// Create array
$fruits = ["Banana", "Apple", "Orange"];
//$fruits2 = array("pineapple","tamarind","mango");

// Print the whole array
echo '<pre>'; // makes the array more readable
var_dump($fruits); //not user friendly if you just var_dump
//var_dump($fruits2);
echo '</pre>';

// Get element by index
echo $fruits[1].'<br>'; //position 1 in the array is apple
//echo $fruits2[2].'<br>';//position 2 in the array is mango
//echo $fruits2[3].'<br>';// wont work there is no value at position 3

// Set element by index
$fruits[0] = "Peach";// you can change the value inside the array

// Check if array has element at index 2
echo '<pre>';
var_dump(isset($fruits[2]));// checks true of false
echo '</pre>';

// Append element
$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits); // append with [] square bracket notation
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
//$fruits[] = 'Peach';
//echo $fruits[3].'<br>';
array_push($fruits, 'Foo');//special function specify the array then the value
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Remove element from the end of the array
echo array_pop($fruits);//echo shows/prints what we took out
echo '<pre>';
var_dump($fruits);
echo '</pre>';


echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'pineapple');
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Remove element from the beginning of the array
echo array_shift($fruits);

// Split the string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string)); // you have to specify the delimiter
echo '</pre>';

print_r($fruits);

// Combine array elements into string
echo implode("&", $fruits).'<br>';

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("Peach", $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));// the order matters to final array
var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits); //sort, rsort
echo '<pre>';
var_dump($fruits);
echo '</pre>';


 https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
echo '<pre>';
var_dump($person);
echo '</pre>';

echo '<pre>';
print_r($person);//does the same thing as var_dump looks cleaner to me
echo '</pre>';

//// Get element by key
echo $person['name'].'<br>';

// Set new element by key
$person['channel'] = 'TraversyMedia';

//Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])){
    $person['address'] = 'Unknown';
}
$person['address'] ??= 'Unknown';//?? checks if value is set or not
echo $person['address'].'<br>';

// Check if array has specific key
echo '<pre>';
var_dump(isset($person['age']));  // Change age into "location"
echo '</pre>';

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two Dimensional arrays
$todos = [
    ['title' => 'Todo title 1', 'completed'=> true ],
    ['title' => 'Todo title 2', 'completed'=> false ],
];
echo '<pre>';
var_dump($todos);
echo '</pre>';