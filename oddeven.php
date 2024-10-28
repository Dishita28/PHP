<?php
// User-defined function to check if a number is odd or even
function checkOddEven($number) {
    if ($number % 2 == 0) {
        return "$number is Even";
    } else {
        return "$number is Odd";
    }
}

// Example usage
$number = 5;
echo checkOddEven($number);
?>
