<?php

// File to delete
$fileName = 'example.txt';

// Check if the file exists before deleting
if (file_exists($fileName)) {
    // Delete the file
    unlink($fileName);
    echo "File deleted successfully.";
} else {
    echo "File not found.";
}

?>
