<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
// Arithmetic operations
/*echo $a + $b + $c.'<br>';
echo $a + $b * $c.'<br>';*/
echo ($a + $b) * $c.'<br>';
echo $a - $b.'<br>';
echo $a * $b.'<br>';
echo $a / $b.'<br>';
echo $a % $b.'<br>';

// Assignment with math operators
//$a = $a + $b; means the same as $a += $b;
//$a += $b; echo $a.'<br>'; // $a = 9
//$a -= $b; echo $a.'<br>'; // $a = 1
//$a *= $b; echo $a.'<br>'; // $a = 20
//$a /= $b; echo $a.'<br>'; // $a = 1.25
//$a %= $b; echo $a.'<br>'; // $a = 1 % is remainder
// Increment operator
echo $a++.'<br>'; //Value is printed then increased
echo ++$a.'<br>'; // Value is increased then printed
// Decrement operator
echo $a--.'<br>'; // Value is printed then decreased =7
echo--$a.'<br>'; // // Value is decreased then printed =5
// Number checking functions
is_float(1.25); // true 1.25 is a float
is_double(1.25); // true
is_int(5); // true
is_numeric("3.45"); // true
//is_numeric("3g.45") // false the g is not numeric

// Conversion
$strNumber = '12.34'; // variable contains a string value
$number = (int)$strNumber; //take the strNumber and cast it in the float
var_dump($number);
echo '<br>';
echo '<br>';

// Number functions
echo "abs(-15)" . abs(-15) .'<br>'; //The absolute value of number.
echo "pow(2, 3)" . pow(2, 3) .'<br>'; //Returns base raised to the power of exp.
echo "sqrt(16)" . sqrt(16) .'<br>'; //Square root
echo "max(2, 3, 9)" . max(2, 9,3) .'<br>';//max among given
echo "min(2, 3)" . min(2, 3) .'<br>';// min among given
echo "round(2.4)" . round(2.4) .'<br>';// rounds a float
echo "round(2.6)" . round(2.6) .'<br>';
echo "floor(2.6)" . floor(2.6) .'<br>'; //Round fractions down
echo "ceil(2.4)" . ceil(2.4) .'<br>'; //rounded up to the next highest integer.
echo '<br>';
// Formatting numbers
$number = 123456789.12345; // the number we are working with
echo number_format($number, 2, '.', ','); // the 2 strips everything after the second number after the decimal
//function number_format ($num , $decimals = 0 , $decimal_separator = '.' , $thousands_separator = ',' ) string

// https://www.php.net/manual/en/ref.math.php
