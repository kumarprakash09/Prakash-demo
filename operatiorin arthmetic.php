<?php

$a = 10;
$b = 4;

// Addition
$sum = $a + $b;
echo "Addition: " . $sum . "\n"; // Output: Addition: 14

// Subtraction
$difference = $a - $b;
echo "Subtraction: " . $difference . "\n"; // Output: Subtraction: 6

// Multiplication
$product = $a * $b;
echo "Multiplication: " . $product . "\n"; // Output: Multiplication: 40

// Division
$quotient = $a / $b;
echo "Division: " . $quotient . "\n"; // Output: Division: 2.5

// Modulus
$remainder = $a % $b;
echo "Modulus: " . $remainder . "\n"; // Output: Modulus: 2

// Exponentiation (Introduced in PHP 5.6)
$power = $a ** $b; 
echo "Exponentiation: " . $power . "\n"; // Output: Exponentiation: 10000


// Combining operators with assignment operators (shorthand)
$x = 10;
$x += 5; // equivalent to $x = $x + 5; 
echo "Add and Assign: " . $x . "\n"; // Output: Add and Assign: 15


// Demonstrating order of operations (multiplication before addition)
$result = 2 + 3 * 5; 
echo "Order of Operations Example: " . $result . "\n"; // Output: Order of Operations Example: 17

// Forcing order of operations using parentheses
$result_with_parentheses = (2 + 3) * 5; 
echo "Order of Operations with Parentheses: " . $result_with_parentheses . "\n"; // Output: Order of Operations with Parentheses: 25

?>