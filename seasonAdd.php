<?php
require 'dbConnect.php';
$sql = "insert into season (seasonName, beginDate, endDate) VALUES ('" . $_REQUEST["seasonName"] .
  "','" . $_REQUEST["beginDate"] . "','" . $_REQUEST["endDate"] . "')";

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