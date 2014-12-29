<?php
require_once("passwords.php");

$dblink = mysql_connect($db_host, $db_user, $db_password);
$sc = mysql_select_db("haleyblog", $dblink);
?>