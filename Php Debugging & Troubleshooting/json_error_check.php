<?php

// JSON string with a missing closing curly brace (invalid syntax).
$json_data = '{"name": "Srinivas", "age": 26';

// Step 1: Display original JSON string.
echo "Original JSON string:<br>";
echo $json_data . "<br><br>";

// Step 2: Decode JSON string into an associative array.
$decoded_data = json_decode($json_data, true);

// Step 3: Check for JSON decoding errors.
if (json_last_error() !== JSON_ERROR_NONE) {
    // Output decoding error and troubleshooting tips.
    echo "JSON Error: " . json_last_error_msg() . "<br>";
    echo "Tip: Check for missing brackets, quotes, or other structural issues in the JSON.<br>";
} 
else {
    // Step 4: Display decoded data.
    echo "Decoded JSON data:<br>";
    echo '<pre>' . print_r($decoded_data, true) . '</pre>';
}

?>
