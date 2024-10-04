<?php
// Define the file path
$file_path = "C:\\xampp\\htdocs\\Php-Learnings\\Php File Handling\\filehandling.txt";

// Check if the file exists
if (file_exists($file_path)) {
    echo "The file 'filehandling.txt' exists.";
}
else {
    echo "The file 'filehandling.txt' does not exist.";
}
?>
