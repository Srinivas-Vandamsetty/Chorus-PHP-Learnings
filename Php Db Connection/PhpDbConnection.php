<?php
// Database connection parameters.
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "php_chorus";

// Create connection.
$conn = new mysqli($server_name, $user_name, $password, $db_name);

// Check connection.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind statement.
$stmt = $conn->prepare("INSERT INTO employee_data (id, name, email) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $id, $name, $email);

// Set parameters and execute the statement.
$id = 2;
$name = "Dhoni";
$email = "Dhoni@gmail.com";
$stmt->execute();

echo "New record created successfully";

// Close statement and connection.
$stmt->close();
$conn->close();
?>
