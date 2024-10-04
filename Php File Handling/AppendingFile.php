<?php

// File name to append content.
$file_name = 'data.txt';

// Content to append.
$file_content = "\nAppending new content to the file.";

// Open the file in append mode.
$file_handle = fopen($file_name, 'a');

// Append the content to the file.
fwrite($file_handle, $file_content);

// Close the file.
fclose($file_handle);

echo "Content appended to the file successfully.";

?>
