<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

echo "Session variables are set.".$_SESSION["favcolor"];
?>

</body>
</html>
