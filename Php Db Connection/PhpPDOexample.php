<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_chorus";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO employee_data (id, name, email) VALUES (:id, :name, :email)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    $id = "1";
    $name = "Srinivas";
    $email = "Srinivas@example.com";
    $stmt->execute();

    echo "New records created successfully";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>