<?php
require 'dbConnect.php';

$sql = "UPDATE performance SET performanceName = '" . $_REQUEST["performanceName"] . "', "; 
$sql .= "performanceDate = '" . $_REQUEST["performanceDate"] . "' ";
$sql .= "where performanceName = '" . $_REQUEST["id"] . "' ";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
    window.location = 'performances.php';
</script>