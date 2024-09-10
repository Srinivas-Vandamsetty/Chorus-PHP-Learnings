<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_chorus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO employee_data (id, name, email) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $id, $name, $email);

// Set parameters and execute
$id = 2; // Using integer type for id
$name = "Dhoni";
$email = "Dhoni@gmail.com";
$stmt->execute();

echo "New records created successfully";

// Close statement and connection
$stmt->close();
$conn->close();
?>
