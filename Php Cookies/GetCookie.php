<?php
// Check if the cookie "user" is set, and if so, get its value.
if(isset($_COOKIE["user"])) {
    echo "User is: " . $_COOKIE["user"];
} 
else {
    echo "Cookie 'user' is not set";
}
?>
