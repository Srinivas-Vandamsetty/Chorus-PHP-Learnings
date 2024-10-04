<?php

// File to write to
$file_name = 'data.txt';

// Content to write
$content = "Hello, this is a test file.\nWriting to a file in PHP.";

// Open the file in write mode
$file = fopen($file_name, 'w');

// Check if the file opened successfully
if ($file) {
    // Write the content to the file
    fwrite($file, $content);

    // Close the file
    fclose($file);

    echo "Content written to the file successfully.";
}
else {
    echo "Failed to open the file for writing.";
}
?>
