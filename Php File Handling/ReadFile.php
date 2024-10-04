<?php

// File to append to
$file_name = 'data.txt';

// Content to append
$content = "\nAppending new content to the file.";

// Open the file in append mode
$file = fopen($file_name, 'a');

// Check if the file opened successfully
if ($file) {
    // Append the content to the file
    fwrite($file, $content);

    // Close the file
    fclose($file);

    echo "Content appended to the file successfully.";
}
else {
    echo "Failed to open the file for appending.";
}
?>
