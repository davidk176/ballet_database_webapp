<?php
require 'dbConnect.php';
$sql = "insert into performance (performanceName, performanceDate, seasonFK) VALUES ('" . $_REQUEST["performanceName"] .
  "','" . $_REQUEST["performanceDate"] . "','" . $_REQUEST["seasonFK"] . "')";

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