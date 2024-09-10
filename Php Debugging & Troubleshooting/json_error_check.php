<?php
// Invalid JSON string with an extra comma causing an error
$json_string = '{"name": "Srinivas", "age": 26,}';

// Decode the JSON string
$data = json_decode($json_string, true);

// Check for JSON decoding errors
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "JSON Error: " . json_last_error_msg();
}
