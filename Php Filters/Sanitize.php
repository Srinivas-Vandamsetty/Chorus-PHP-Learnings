<?php

// Original String.
$string = "Hello, <strong>World!</strong>";
$sanitizedString = strip_tags($string);

// Original Email Address.
$email = "srinivas<at>@gmail.com";
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

// Original URL.
$url = "http://www.example.com/?name=Srinivas Sai&age=30";
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);

// Output Results.
echo "Original String: $string<br>";
echo "Sanitized String: $sanitizedString<br><br>";

echo "Original Email: $email<br>";
echo "Sanitized Email: $sanitizedEmail<br><br>";

echo "Original URL: $url<br>";
echo "Sanitized URL: $sanitizedUrl<br>";

?>
