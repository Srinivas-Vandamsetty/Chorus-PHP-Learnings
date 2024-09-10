<?php
// Enable error reporting for all errors and warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Example of using var_dump and print_r for debugging
function debugData($data) {
    echo "Debugging with var_dump and print_r:<br>";
    var_dump($data);
    echo "<br>";
    print_r($data);
    echo "<br><br>";
}

$data = ['name' => 'Alice', 'age' => 25, 'email' => 'alice@example.com'];
debugData($data);


echo "<br>";

// Database connection and error handling
function connectToDatabase() {
    $conn = mysqli_connect('localhost', 'root', '', 'test_db');
    if (!$conn) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<br>";
        return false;
    }
    return $conn;
}

function fetchDataFromDatabase($conn) {
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Error executing query: " . mysqli_error($conn) . "<br>";
        return;
    }
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
        echo "<br>";
    }
}

function closeDatabaseConnection($conn) {
    mysqli_close($conn);
}

$conn = connectToDatabase();
if ($conn) {
    fetchDataFromDatabase($conn);
    closeDatabaseConnection($conn);
}
?>
