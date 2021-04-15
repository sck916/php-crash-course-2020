<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age == 20) {
    echo "1";
}

// Without curly braces
if ($age === 20)
    echo "1";

// Sample if-else
if ($age > 20) {
    echo "1";
} else {
    echo "2";
}

// Difference between == and === | === checks values and types(string integer etc)
$age == 20; // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false

// if AND
if ($age > 20 && $salary === 300000) {
    echo "Do something";// wont print
}
// if OR
if ($age > 20 OR $salary === 300000) {
    echo "Do something";
}

// Ternary if for conditonal statement for something small
echo $age < 22 ? 'Young' : 'Old';// ? - if this evaluates as true then do something
echo '<br>';// : = otherwise

// Short ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"

// Null coalescing operator
$var = isset($name) ? $name : 'John';
$var = $name ?? 'John'; // Equivalent of above
echo $var.'<br>';

// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything "check the echo"<br>';
        break;
    case 'editor';
        echo 'You can edit content"check the echo"<br>';
        break;
    case 'user':
        echo 'You can view posts and comment"check the echo"<br>';
        break;
    default:
        echo 'Unknown role"check the echo"<br>';
}
