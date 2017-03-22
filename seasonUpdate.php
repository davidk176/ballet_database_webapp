<?php
require 'dbConnect.php';

$sql = "UPDATE season SET seasonName = '" . $_REQUEST["seasonName"] . "', "; 
$sql .= "beginDate = '" . $_REQUEST["beginDate"] . "', ";
$sql .= "endDate = '" . $_REQUEST["endDate"] . "' ";
$sql .= "where seasonName = '" . $_REQUEST["id"] . "' ";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
    window.location = 'index.php';
</script>