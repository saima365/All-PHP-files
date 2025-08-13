<?php

// 1. Declar Variables & Constants

//  Print the name, age, and PI using echo

$name= "Tithe";
$age= 25;
define ("PI", 3.1416);


echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo PI;
echo "<br>";


// 2. Arithmetic Operators
$a = 10;
$b = 3;

//  Find and echo sum, difference, multiplication, division, modulus

echo ($a+$b);
echo "<br>";
echo ($a-$b);
echo "<br>";
echo ($a*$b);
echo "<br>";
echo ($a/$b);
echo "<br>";
echo ($a%$b);
echo "<br>";
echo ($a**$b);
echo "<br>";


// 3. Assignment Operators

$num = 5;

echo $num+=1;
echo "<br>";
echo $num-=1;
echo "<br>";
echo $num*=1;
echo "<br>";
echo $num/=1;
echo "<br>";
echo $num%=1;
echo "<br>";



// 4. Comparison Operators


$x = 10;
$y = "10";


if ($x==$y) {
    print "true";
}else {
    print "false";
};

echo "<br>";

if ($x===$y) {
    print "true";
}else {
    print "false";
};
echo "<br>";

// 5. Type Casting

$val = "15.7";
echo "<br>";
$val = (int)"15.7";
print $val;
echo "<br>";
$val = (float)"15.7";
print $val;

echo "<br>";

// 6. DIE Function
// die("Stopping script here!");

// 7. sprintf() 

$firstName = "John";
$lastName = "Doe";

sprintf ("Name %s %s", $firstName, ($lastName),);
$printf = sprintf ("Name: %s %s", $firstName, ($lastName),);

echo $printf;


// 8. print_r()

$array = ["Apple", "Banana", "Mango"];
//  Print array in human-readable form

print_r($array);

// 9. echo
echo "<h1>Echo a sentence about you with HTML formatting</h1>";

// 10. print
//  Use print to output a string

print("Echo a sentence about you with HTML formatting");

echo "<br>";
echo "<br>";
echo "<br>";

// 11. Comparison Practice
$m = 20;
$n = 15;
//  Check if $m > $n and echo true/false

if ($m>$n) {
    echo "true";
}else {
    echo "false";
};
echo "<br>";


// 12. Type Casting with Arrays
$numStr = "123";
//  Cast to integer and array, print both

$numStr = (int) "123";
echo $numStr;
echo "<br>";
$numStr = (array) "123";
print_r ($numStr);

echo "<br>";
// 13. Arithmetic Challenge
$price = 50;
$discount = 10; // percent
//  Calculate discounted price
print($price/100*10);


?>