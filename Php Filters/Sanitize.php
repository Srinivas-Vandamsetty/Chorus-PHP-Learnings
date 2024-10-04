<?php

// Original String.
$original_string = "Hello, <strong>World!</strong>";
$sanitized_string = strip_tags($original_string);

// Original Email Address.
$original_email = "srinivas<at>@gmail.com";
$sanitized_email = filter_var($original_email, FILTER_SANITIZE_EMAIL);

// Original URL.
$original_url = "http://www.example.com/?name=Srinivas Sai&age=30";
$sanitized_url = filter_var($original_url, FILTER_SANITIZE_URL);

// Output Results.
echo "Original String: $original_string<br>";
echo "Sanitized String: $sanitized_string<br><br>";

echo "Original Email: $original_email<br>";
echo "Sanitized Email: $sanitized_email<br><br>";

echo "Original URL: $original_url<br>";
echo "Sanitized URL: $sanitized_url<br>";

?>
