<?php
setcookie("loggedin", "", time() - 86400, "/"); // 86400 = 1 day
header("Location: index.php");
?>