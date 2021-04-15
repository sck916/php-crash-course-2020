<?php

// Create simple string
$name = 'Steve';
$string = 'Hello I am $name. I am 28';
$string2 = "Hello I am $name. I am 28";// "using double quotes" lets you add variable and prints out its value
echo $string.'<br>';// print out $string
echo $string2.'<br>';// print out $string2

// String concatenation
echo "Hello " . " World".'<br>';
echo 'Hello '.' World' .' and PHP'.'<br>';// Multiple concatenation . " and PHP";

// String functions
$string = "    Hello World      ";// variable with spaces
//we can call functions on the variable a string in this case

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;//strlen length of the string
echo "2 - " . trim($string) . '<br>' . PHP_EOL;//trim removes white spaces from start and end of the string
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;//ltrim removes white spaces from left of the string leaves spaces on the right
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;//rtrim removes white spaces from right of the string leaves spaces on the left
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;//str_word_count counts words in the string
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;//strrev reverses the string
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;// strtoupper Makes a string uppercase
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;// strtolower — Make a string lowercase
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;//ucfirst — Make a string's first character uppercase
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;//lcfirst Make a string's first character lowercase
echo "11 - " . ucwords('hello world and php') . '<br>' . PHP_EOL;// ucwords  Uppercase the first character of each word in a string
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Find the position of the first occurrence of a substring in a string looking for world in the $string CASE IS IMPORTANT
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;// Find the position of the first occurrence of a case-insensitive substring in a string IGNORES THE CASE
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;//strip everything before position 8 in the string
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;//Replace all occurrences of the search string with the replacement string
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;//Case-insensitive version of str_replace

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;


//Multiline text and line breaks
$longText = "
  Hello, my name is Steve
  I am 33,
  I love my son
";
echo $longText . '<br>' . PHP_EOL; // if you print it like this it will print in a single line no line breaks
echo nl2br($longText) . '<br>' . PHP_EOL; // nl2br Inserts/creates HTML line breaks before all newlines in a string

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Steve</b>
  I am <b>33</b>,
  I love my son
";
echo "1 - " . $longText . '<br>';// single line with bold <b> tags
echo "2 - " . nl2br($longText) . '<br>'; //nl2br Inserts/creates HTML line breaks before all newlines in a string
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;// prints as it as written one line in the code and shows the tags
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;//prints as it as written in the code and shows the tags
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo html_entity_decode('&lt;b&gt;Steve&lt;/b&gt;').'<br>';// decodes the html entity
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;


// https://www.php.net/manual/en/ref.strings.php