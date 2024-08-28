<?php

// Validate an Integer
echo "<h2>Validate an Integer</h2>";
$integer = "777";

if (filter_var($integer, FILTER_VALIDATE_INT) !== false) {
    echo "$integer is a valid integer.<br>";
} 
else {
    echo "$integer is not a valid integer.<br>";
}

echo "<br>";
echo "<br>";

// Validate an IP Address
echo "<h2>Validate an IP Address</h2>";
$ip = "192.168.0.1";

if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo "$ip is a valid IP address.<br>";
} 
else {
    echo "$ip is not a valid IP address.<br>";
}

echo "<br>";
echo "<br>";

// Validate an Email Address
echo "<h2>Validate an Email Address</h2>";
$email = "srinivas@gmail.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is a valid email address.<br>";
} 
else {
    echo "$email is not a valid email address.<br>";
}

echo "<br>";
echo "<br>";

// Validate a URL
echo "<h2>Validate a URL</h2>";
$url = "http://www.google.com";

if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "$url is a valid URL.<br>";
} 
else {
    echo "$url is not a valid URL.<br>";
}

echo "<br>";
echo "<br>";

// Validate an Integer Within a Range
echo "<h2>Validate an Integer Within a Range</h2>";

$number = 50;

$options = array(
    "options" => array(
        "min_range" => 1,
        "max_range" => 100
    )
);

if (filter_var($number, FILTER_VALIDATE_INT, $options) !== false) {
    echo "$number is a valid integer within the range 1-100.<br>";
} 
else {
    echo "$number is not a valid integer within the range 1-100.<br>";
}

echo "<br>";
echo "<br>";

// Validate URL - Must Contain Query String
echo "<h2>Validate URL - Must Contain Query String</h2>";
$url_with_query = "http://www.google.com/?param=value";

if (filter_var($url_with_query, FILTER_VALIDATE_URL) && parse_url($url_with_query, PHP_URL_QUERY)) {
    echo "$url_with_query is a valid URL and contains a query string.<br>";
} 
else {
    echo "$url_with_query is not a valid URL or does not contain a query string.<br>";
}

?>
