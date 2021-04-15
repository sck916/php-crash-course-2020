<?php

// What is a variable - a container that stores some value

// Variable types

/*
string
integer
Float/Double
Boolean
Null
Array
Object
Resource
*/

// Declare variables

$name = 'steve'; //string
$age = 33; //integer
$isMale = true; //Boolean will display 1 for true empty string for false
$height = 1.87; //Float
$salary = null; //Null
$cars = array("Volvo","BMW","Toyota"); //Array

// Print the variables. Explain what is concatenation = The PHP concatenation operator (.) is used to combine two string values to create one string. .= Concatenation assignment.
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>'; // when boolean is converted to string it prints 1 for true false is converted to empty string so no output in the browser
echo $height .'<br>';
echo $salary .'<br>'; // Null prints as empty string

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary).'<br>';
// Change the value of the variable
$name = false;
// Print type of the variable
echo gettype($name).'<br>';
// Variable checking functions
is_string($name); // false because we changed the value of $name
Is_int($age); // true
is_bool($isMale); //true
is_double($height); //true
is_array($cars);
// Check if variable is defined in the current, The variable exists and is not NULL, otherwise it returns false.
isset($name); // will check of variable is declared and return true or false
isset($address); // false because its not declared

// Constants cant be changed
define('PI', 3.14);
echo  PI.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>'; // sort ascending
echo PHP_INT_MAX.'<br>'; //max number the integer can have

