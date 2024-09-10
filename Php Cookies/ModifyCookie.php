<?php
// Modify the value of the cookie "user" to "Dhoni" and extend its expiration by 1 hour.
if(isset($_COOKIE["user"])) {
    setcookie("user", "Dhoni", time() + 3600, "/"); 
    echo "Cookie 'user' is modified to 'Dhoni'";
}
else {
    echo "Cookie 'user' does not exist";
}
?>
