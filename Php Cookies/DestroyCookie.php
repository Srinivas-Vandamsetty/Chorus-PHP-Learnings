<?php
// Destroy the cookie "user" by setting its expiration time to the past.
setcookie("user", "", time() - 3600, "/"); 
echo "Cookie 'user' is destroyed";
?>
