<?php
/*
Data types in PHP
1. String
2. Integer
3. float
4. Boolean 
5. Object 
6. Array
7. null
*/

// String
$name = "mudassir";
echo "my name is $name<br>";

// Integer
$income = 500000;
echo "my income is $income<br>";

// Float
$weight = 44.5;
echo "my weight is $weight <br>";

// Boolean 
$x = true ;
$y = false ;
echo var_dump($x);
echo "<br>";
echo var_dump($y);

// Object are the instance of classes 
// Students is class and Sadiq is an instance 

// Arrays are used to store multiple values in a single var
$friends = ["Mudassir" ,"Haris" , "Sameer" , "Usama"];
echo var_dump($friends);
echo "<br>";
echo "$friends[0]";
echo "<br>";
echo "$friends[1]";
echo "<br>";
echo "$friends[2]";
echo "<br>";
echo "$friends[3]";
// This will through an error 
// echo "<br>";
// echo "$friends[4]";

// NULL
$name1 = NULL;
echo "<br>";
echo var_dump($name1);
?>