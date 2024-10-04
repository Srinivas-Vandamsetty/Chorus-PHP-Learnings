<?php
// Define the file path
$file_path = 'C:\\xampp\\htdocs\\Php-Learnings\\Php File Handling\\filehandling.txt';

// Check if the file exists
if (file_exists($file_path)) {
    // Get the file size in bytes
    $file_size = filesize($file_path);

    // Display the file size
    echo "The file 'filehandling.txt' exists and its size is {$file_size} bytes.";
}
else {
    // Display an error message if the file does not exist
    echo "The file 'filehandling.txt' does not exist.";
}
?>
