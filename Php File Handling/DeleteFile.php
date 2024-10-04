<?php

// Specify the file to be deleted.
$file_name = 'example.txt';

// Check if the file exists before attempting to delete it.
if (file_exists($file_name)) {
    // Delete the file.
    unlink($file_name);
    echo "The file has been deleted successfully.";
}
else {
    echo "The file does not exist.";
}

?>
