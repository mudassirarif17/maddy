<?php
$a =45;
$b =8;

// Arithmetic Operator
echo "The Sum of a and b is ". ($a + $b) . "<br>";
echo "The Dif of a and b is ". ($a - $b) . "<br>";
echo "The Mul of a and b is ". ($a * $b) . "<br>";
echo "The Div of a and b is ". ($a / $b) . "<br>";
echo "The Mod of a and b is ". ($a % $b) . "<br>";
echo "The ** of a and b is ". ($a ** $b) . "<br>";

// Assignment Operator
// $x = $a;
$a +=6;
// echo "The value of x is ".( $x ). "<br>";
echo "The new value of a is " . $a . "<br>";

// Comparison Operator
$x =60;
$y=60;

echo "For x > y The result is <br>";
echo var_dump($x > $y);
echo "<br>";

echo "For x < y The result is <br>";
echo var_dump($x < $y);
echo "<br>";

echo "For x <> y The result is <br>";
echo var_dump($x <> $y);
echo "<br>";

// Logical Operator
$m = false;
$n = true;

echo "For m and n the result is";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n the result is";
echo var_dump($m || $n);
echo "<br>";

echo "For m Not n the result is";
echo var_dump($m != $n);
echo "<br>";


?>