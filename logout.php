<?php
session_start();
session_destroy();
header("location:/ballett_database_webapp/index.php");
exit();
?>