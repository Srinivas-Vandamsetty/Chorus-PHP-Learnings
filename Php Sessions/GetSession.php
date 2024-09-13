<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page.
echo "My name is " . $_SESSION["name"] . ".<br>";
echo "Favorite player is " . $_SESSION["favplayer"] . ".<br>";
echo "Favorite number is " . $_SESSION["favnumber"] . ".";

?>

</body>
</html>
