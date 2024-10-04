<?php

// Associative array.
$data = [
    "name" => "Sai Srinivas",
    "email" => "srinivas@example.com",
    "age" => 26,
    "is_active" => true
];

// Encoding the array to a JSON string.
$json_string = json_encode($data);

echo $json_string;
echo "<br><br>";

// Multidimensional array.
$products = [
    [
        "id" => 1,
        "name" => "Laptop",
        "price" => 60000,
        "in_stock" => true
    ],
    [
        "id" => 2,
        "name" => "Smartphone",
        "price" => 30000,
        "in_stock" => false
    ]
];

// Encoding the multidimensional array to a JSON string.
$json_string = json_encode($products);

echo $json_string;
echo "<br><br>";

// Associative array.
$data = [
    "name" => "Srinivas",
    "email" => "srnivas.vandamsetty@example.com",
    "age" => 26,
    "is_active" => true
];

// Encoding the array to a pretty-printed JSON string.
$json_string = json_encode($data, JSON_PRETTY_PRINT);

// Output the JSON string.
echo $json_string;

?>
