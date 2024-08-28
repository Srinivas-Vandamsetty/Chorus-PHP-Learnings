<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "Srinivas";
$_SESSION["favplayer"] = "Dhoni";
$_SESSION["favnumber"] = "7";

echo "Session variables are set.";

?>

</body>
</html>
