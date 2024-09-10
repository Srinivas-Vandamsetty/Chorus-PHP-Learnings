<?php

// File to write to
$fileName = 'data.txt';

// Content to write
$content = "Hello, this is a test file.\nWriting to a file in PHP.";

// Open the file in write mode
$file = fopen($fileName, 'w');

// Write the content to the file
fwrite($file, $content);

// Close the file
fclose($file);

echo "Content written to the file successfully.";

?>
