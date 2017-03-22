<?php
require 'dbConnect.php';
$index = 'SELECT LOCATE("-", $_REQUEST["id"]);';
$result = $mysqli->query($index);
$result->data_seek(0);

$dancerFK = 'SELECT SUBSTRING($_REQUEST["id"], ($result - 1));'; 
$resultA = $mysqli->query($index);
$resultA->data_seek(0);

$balletFK = 'SELECT SUBSTRING($_REQUEST["id"], FROM ($result + 1));';
$resultB = $mysqli->query($index);
$resultB->data_seek(0);
 	
$sql = "DELETE FROM role WHERE dancerFK LIKE '" . $resultA . "'";
$sql .=" AND balletFK LIKE '" . $resultB . "'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location = 'roles.php';
</script>