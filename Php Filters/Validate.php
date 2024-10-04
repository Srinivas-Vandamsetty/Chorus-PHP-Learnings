<?php

// Function to validate and display results.
function validate($data, $type, $options = null) {
    $isValid = false;
    switch ($type) {
        case 'integer':
            $isValid = filter_var($data, FILTER_VALIDATE_INT) !== false;
            break;
        case 'ip':
            $isValid = filter_var($data, FILTER_VALIDATE_IP);
            break;
        case 'email':
            $isValid = filter_var($data, FILTER_VALIDATE_EMAIL);
            break;
        case 'url':
            $isValid = filter_var($data, FILTER_VALIDATE_URL);
            break;
        case 'integer_range':
            $isValid = filter_var($data, FILTER_VALIDATE_INT, $options) !== false;
            break;
    }

    return $isValid;
}

// Validate an Integer.
echo "<h2>Validate an Integer</h2>";
$integer = "777";
if (validate($integer, 'integer')) {
    echo "$integer is a valid integer.<br>";
} 
else {
    echo "$integer is not a valid integer.<br>";
}

echo "<br><br>";

// Validate an IP Address.
echo "<h2>Validate an IP Address</h2>";
$ip = "192.168.0.1";
if (validate($ip, 'ip')) {
    echo "$ip is a valid IP address.<br>";
} 
else {
    echo "$ip is not a valid IP address.<br>";
}

echo "<br><br>";

// Validate an Email Address.
echo "<h2>Validate an Email Address</h2>";
$email = "srinivas@gmail.com";
if (validate($email, 'email')) {
    echo "$email is a valid email address.<br>";
} 
else {
    echo "$email is not a valid email address.<br>";
}

echo "<br><br>";

// Validate a URL.
echo "<h2>Validate a URL</h2>";
$url = "http://www.google.com";
if (validate($url, 'url')) {
    echo "$url is a valid URL.<br>";
} 
else {
    echo "$url is not a valid URL.<br>";
}

echo "<br><br>";

// Validate an Integer Within a Range.
echo "<h2>Validate an Integer Within a Range</h2>";
$number = 50;
$options = array(
    "options" => array(
        "min_range" => 1,
        "max_range" => 100
    )
);
if (validate($number, 'integer_range', $options)) {
    echo "$number is a valid integer within the range 1-100.<br>";
} 
else {
    echo "$number is not a valid integer within the range 1-100.<br>";
}

echo "<br><br>";

// Validate URL - Must Contain Query String.
echo "<h2>Validate URL - Must Contain Query String</h2>";
$url_with_query = "http://www.google.com/?param=value";
if (validate($url_with_query, 'url') && parse_url($url_with_query, PHP_URL_QUERY)) {
    echo "$url_with_query is a valid URL and contains a query string.<br>";
} 
else {
    echo "$url_with_query is not a valid URL or does not contain a query string.<br>";
}

?>
