<?php
session_start();
if (!isset($_SESSION['TEST'])) {
$_SESSION['TEST'] = time();
}
$_SESSION['TEST3'] = time();
print $_SESSION['TEST'];
print "<br><br>";
print $_SESSION['TEST3'];
print "<br><br>";
print session_id();
?>

