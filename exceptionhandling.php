<?php
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Cannot divide by zero.");
    }
    return $numerator / $denominator;
}
try {
    echo divide(10, 2) . "<br>";
    echo divide(10, 0) . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
