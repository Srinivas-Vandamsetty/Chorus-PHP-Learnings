<?php
// Invalid JSON string with an extra comma causing an error.
$json_string = '{"name": "Srinivas", "age": 26,}';

// Step 1: Debug the initial JSON string before decoding.
// Check the structure of the JSON string to ensure it's correctly formatted.
echo "Original JSON string:<br>";
echo $json_string . "<br><br>";

// Step 2: Decode the JSON string and convert it to an associative array.
$data = json_decode($json_string, true);

// Step 3: Check for JSON decoding errors.
if (json_last_error() !== JSON_ERROR_NONE) {
    // Output the error message for the last JSON decoding error.
    echo "JSON Error: " . json_last_error_msg() . "<br>";
    
    // Step 4: Debug the JSON structure manually.
    // JSON errors are often caused by syntax issues, such as an extra comma or missing curly brace.
    // Print the problematic JSON string and visually inspect it for issues.
    echo "The error is likely due to a syntax issue in the JSON string above.<br>";
    echo "Tip: Ensure there are no trailing commas or missing brackets in the JSON format.<br>";
} else {
    // Step 5: If no errors, debug the decoded data structure using print_r or var_dump.
    echo "Decoded JSON data:<br>";
    print_r($data);
}
?>
