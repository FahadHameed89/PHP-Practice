This not not in PHP!!!

<?php
// 'echo' and 'print' are function we can use to output strings as responses...!
/**
 * in PHP, functions do not care about case sensitivity. echo = ECHO = eChO in terms of validity...!
 * 
 */
echo "Hello World...in PHP!";

/**
 * Variable names start with a Dollar-sign ($)
 * Note that unlike functions, they ARE case sensitive...!
 * Also, don't start them with numbers or special characters...!
 */

$studentName1 = "Fahad";
$studentName2 = "Zagreus";
$studentName3 = "Jordash";

echo "\n$studentName1";

echo "\nSome people are $studentName1, $studentName2, and $studentName3";

echo "\n\n This string is being " . 'concatenated!';

// DATA-TYPES in PHP

// Strings
$string1 = "I\'m a string!";
$string2 = "I'm also a string!";

// Integers
$int1 = 123;
$int2 = 0;
$int3 = -23;

// Floats
$float1 = 3.14159;
$float2 = 0.001;
$float3 = 12.4;

// Bools 
$bool1 = true;
$bool2 = FALSE; // Note that even the booleans are case sensitive...! 

// Arrays
$array1 = [ 'firstValue', 10, 16.5, false, 'secondValue' ];     // Syntax example 1
$array2 = array('firstValue', 10, 16.5, false, 'secondValue');  // Syntax example 2

echo $array1[2];

// ASSOCIATIVE Arrays -> Which have Key Value pairs!
$array3 = array(
    'key' => 'value',
    'name' => 'Fahad',
    'class' => 'Warrior',
    'level' => 23
);
echo $array3['class'];

// Objects..!
$object = new stdClass();           // Create a new object called stdClass
$object->name = 'TECHCareers';      // Assign a name property
$object->cohort = 4.2;              // Assign a cohort #
$object->year = 2020;               // Assign a Year

echo "\n\n$object->name" . $object->cohort . $object->year;

// Null
$myNullVar = NULL; // Case insensitive... Pick a style and stick to it. 

// Loops Review -> FOR LOOP
for ($initial = 0; $initial <= 5; $initial++ ) {
    echo "\nThe current value of the counter is: $initial";
}

$heroes = array("Hydra", "Zagreus", "Thesius", "The Minotaur");

foreach ($heroes as $value) {
  echo "\n$value";
}

// Associative Array -> FOREACH
$students = [
    'Danish' => 'Reading',
    'Eboka' => 'Reading',
    'Birm' => 'Watching Tennis',
    'Adolf' => 'Playing Music',
    'Kenji' => 'Rock Climbing',
   'Fahad'  => 'Gaming' 
];

foreach ($students as $name => $hobby) {
    echo "\n$name has a hobby known as $hobby";
  }

// While Loop

$x = 1;

while($x <= 5) {
  echo "\nThe number is: $x";
  $x++;
}

// Functions

function addition ( $num1, $num2)
{
    return ($num1+$num2);    
}

echo "\n";

echo addition(2, 3);