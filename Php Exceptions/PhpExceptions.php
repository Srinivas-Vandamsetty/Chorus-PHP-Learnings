<?php

// Function to divide numbers with exception handling for division by zero.
function divide_numbers($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception("Error: Division by zero.");
    }
    return $numerator / $denominator;
}

// Handle division and catch exceptions.
try {
    echo divide_numbers(10, 2) . "<br>";
    echo divide_numbers(10, 0) . "<br>";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>"
       . "In file: " . $e->getFile() . "<br>"
       . "On line: " . $e->getLine() . "<br>";
}

echo "<br>";

// Custom exception class for invalid input.
class InvalidInputException extends Exception {}

// Function to validate age with custom exception for negative values.
function validate_age($age) {
    if ($age < 0) {
        throw new InvalidInputException("Error: Age cannot be negative.");
    }
    return "Valid age: $age<br>";
}

// Handle age validation and catch exceptions.
try {
    echo validate_age(25);
    echo validate_age(-5);
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
function read_file_content($file_name) {
    if (!file_exists($file_name)) {
        throw new Exception("Error: File not found.");
    }
    return file_get_contents($file_name);
}

// Handle file reading and catch exceptions.
try {
    echo read_file_content("example.txt");
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>"
       . "In file: " . $e->getFile() . "<br>"
       . "On line: " . $e->getLine() . "<br>";
} finally {
    echo "Finished execution.<br>";
}

?>
