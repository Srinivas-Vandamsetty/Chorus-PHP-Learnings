<?php
// JSON string
$json_string = '{"name":"Sai Srinivas","email":"srinivas@example.com","age":26,"is_active":true}';

// Decoding JSON to an associative array
$data = json_decode($json_string, true);

print_r($data);
echo "<br>";

// JSON string
$json_string = '{"name":"Sai Srinivas","email":"srinivas@example.com","age":26,"is_active":true}';
    
// Decoding JSON to an object
$data = json_decode($json_string);

echo $data->name;
echo "<br>";
echo $data->email;
echo "<br>";

// JSON string representing an array of products.
$json_string = '[{"id":1,"name":"Laptop","price":60999,"in_stock":true},{"id":2,"name":"Smartphone","price":39999,"in_stock":false}]';

// Decoding JSON to a PHP array.
$products = json_decode($json_string, true);

print_r($products);
echo "<br>";

// Invalid JSON string.
$json_string = '{"name":"Dhoni","email":"dhoni@example.com", "age":43';

// Attempt to decode the JSON string.
$data = json_decode($json_string);

// Check for JSON errors.
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "JSON Error: " . json_last_error_msg();
} 
?>
