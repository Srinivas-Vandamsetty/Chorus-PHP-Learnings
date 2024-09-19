<?php
// Define the file path
$filePath = "C:\\xampp\\htdocs\\Php-Learnings\\Php File Handling\\filehandling.txt";
$filename = 'filefandling.txt';

// Check if the file exists
if (file_exists($filePath)) {
    echo "The file '{$filename}' exists.";
}
else {
    echo "The file '{$filename}' does not exist.";
}
?>
