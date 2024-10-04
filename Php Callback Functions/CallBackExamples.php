<?php
// Basic Callback Function Example.
echo "<h2>array map</h2>";
function my_callback($item) {
    return strlen($item);
}

$strings = ["srinivas", "raghuram", "rajesh", "dhoni"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);

echo "<br>";

// Callback with Anonymous Function using the same $strings array
$lengths = array_map(function($item) {
    return strlen($item);
}, $strings);
print_r($lengths);

echo "<br>";

function square($n) {
    return $n * $n;
}

$numbers = [1, 2, 3, 4, 5];
$squared_numbers = array_map('square', $numbers);
print_r($squared_numbers);

echo "<br><br>";

// Using Callbacks with usort.
echo "<h2>usort</h2>";
$people = [
    ['name' => 'John', 'age' => 30],
    ['name' => 'Jane', 'age' => 25],
    ['name' => 'Dave', 'age' => 35],
];

usort($people, function($a, $b) {
    return $a['age'] - $b['age'];
});

print_r($people);

echo "<br><br>";

// Class method as callback.
echo "<h2>class method</h2>";
class MathOperations {
    public static function square($n) {
        return $n * $n;
    }
}

$squared_numbers_class = array_map(['MathOperations', 'square'], $numbers);
print_r($squared_numbers_class);

?>
