<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["name"] = "Rajesh";
$_SESSION["favplayer"] = "Rohit";
$_SESSION["favnumber"] = "45";

print_r($_SESSION);
print_r($_SESSION);
print_r($_SESSION);
?>

</body>
</html>