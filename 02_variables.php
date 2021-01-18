<?php

// What is a variable

// Variable types

// Declare variables
$name = 'Stanley';
$age = 21;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>'; /* Boolean is converted into a string when we try to print it. In the browser it will display 1 for true and an empty string for false */
echo $height . '<br>';
echo $salary . '<br>'; /* Null is converted into an empty string as well when we try to print to screen */

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions
is_string($name); //false
is_int($age); //true
is_bool($isMale); //true
is_double($height); // true

// Check if variable is defined
isset($name); // true
isset($address); // false

// Constants
define('PI', 3.14); // (name, value)
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC . '<br>';

echo PHP_INT_MAX . '<br>';
