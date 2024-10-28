<?php
// User-defined function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return "$number is not a Prime number";
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return "$number is not a Prime number";
        }
    }
    return "$number is a Prime number";
}

// Example usage
$number = 7;
echo isPrime($number);
?>