<?php
// Define the file path
$filePath = 'C:\\xampp\\htdocs\\Php-Learnings\\Php File Handling\\filehandling.txt';
$filename = 'filehandling.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Get the file size in bytes
    $fileSize = filesize($filePath);

    // Display the file size
    echo "The file '{$filename}' exists and its size is {$fileSize} bytes.";
}
else {
    // Display an error message if the file does not exist
    echo "The file '{$filename}' does not exist.";
}
?>
