<?php

// Function to divide numbers with exception handling for division by zero.
function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception("Error: Division by zero.");
    }
    return $numerator / $denominator;
}

// Handle division and catch exceptions
try {
    echo divide(10, 2) . "<br>";
    echo divide(10, 0) . "<br>";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>"
       . "In file: " . $e->getFile() . "<br>"
       . "On line: " . $e->getLine() . "<br>";
}

echo "<br>";

// Custom exception class for invalid input.
class InvalidInputException extends Exception {}

// Function to validate age with custom exception for negative values.
function validateAge($age) {
    if ($age < 0) {
        throw new InvalidInputException("Error: Age cannot be negative.");
    }
    return "Valid age: $age<br>";
}

// Handle age validation and catch exceptions
try {
    echo validateAge(25);
    echo validateAge(-5);
} catch (InvalidInputException $e) {
    echo "Caught custom exception: " . $e->getMessage() . "<br>"
       . "In file: " . $e->getFile() . "<br>"
       . "On line: " . $e->getLine() . "<br>";
} catch (Exception $e) {
    echo "Caught general exception: " . $e->getMessage() . "<br>"
       . "In file: " . $e->getFile() . "<br>"
       . "On line: " . $e->getLine() . "<br>";
}

echo "<br>";

// Function to read file contents with exception handling for non-existent files.
function readFileContent($fileName) {
    if (!file_exists($fileName)) {
        throw new Exception("Error: File not found.");
    }
    return file_get_contents($fileName);
}

// Handle file reading and catch exceptions
try {
    echo readFileContent("example.txt");
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>"
       . "In file: " . $e->getFile() . "<br>"
       . "On line: " . $e->getLine() . "<br>";
} finally {
    echo "Finished execution.<br>";
}

?>
