<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login']==0) {
header("location:/ballet_database_webapp/index.php");
exit();
}

?>