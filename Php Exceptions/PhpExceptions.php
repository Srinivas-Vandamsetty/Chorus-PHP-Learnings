<?php

function divide($numerator, $denominator) {
    if ($denominator === 0) {
        // Throwing an exception when the denominator is zero.
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    echo divide(10, 2);
    echo divide(10, 0);
} catch (Exception $e) {
    // Catching the exception and displaying the error message.
    echo "Caught exception: " . $e->getMessage();
}

echo "<br>";

// Defining a custom exception class
class InvalidInputException extends Exception {}

function validateAge($age) {
    if ($age < 0) {
        // Throwing a custom exception if the input is invalid.
        throw new InvalidInputException("Age cannot be negative.");
    }
    return "Valid age: $age";
}

try {
    echo validateAge(25);
    echo validateAge(-5);
} catch (InvalidInputException $e) {
    // Catching the custom exception.
    echo "Caught custom exception: " . $e->getMessage();
} catch (Exception $e) {
    // Catching any other exceptions.
    echo "Caught general exception: " . $e->getMessage();
}

echo "<br>";

function readFileContent($fileName) {
    if (!file_exists($fileName)) {
        // Throwing an exception if the file does not exist.
        throw new Exception("File not found.");
    }
    return file_get_contents($fileName);
}

try {
    echo readFileContent("example.txt");
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
} finally {
    echo "\nFinished execution."; 
}

?>
