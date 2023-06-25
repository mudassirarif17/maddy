<?php
$name = "This is Maddy";
echo "$name <br>";

// . Symbol is used for concating the strings 
echo "The length of the string is " . strlen($name);
echo "<br>";

echo "The number of words " . str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name , "Maddy");
echo "<br>";

echo str_replace("Maddy" , "Mudassir" , $name);
echo "<br>";

echo str_repeat($name , 14);
echo "<br>";
?>