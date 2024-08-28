<?php
// Set a cookie named "user" with the value "Srinivas" that expires in 1 hour.
setcookie("user", "Srinivas", time() + 3600, "/"); 
echo "Cookie 'user' is set";
?>
