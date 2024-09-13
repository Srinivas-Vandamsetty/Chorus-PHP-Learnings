<?php

$fileName = 'data.txt';

// Content to append.
$content = "\nAppending new content to the file.";

// Open the file in append mode.
$file = fopen($fileName, 'a');

// Append the content to the file.
fwrite($file, $content);

// Close the file.
fclose($file);

echo "Content appended to the file successfully.";

?>
