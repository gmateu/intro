<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "RED";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.".$_SESSION["favcolor"];
?>

</body>
</html>
