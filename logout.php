<?php
session_start();
session_destroy();
header("location:/ballet_database_webapp/index.php");
exit();
?>