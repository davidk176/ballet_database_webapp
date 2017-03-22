<?php
require 'dbConnect.php';
$sql = "insert into ballet (balletName, description, choreography, performanceFK) VALUES ('" . $_REQUEST["balletName"] .
  "','" . $_REQUEST["description"] . "','" . $_REQUEST["choreography"] . "','" . $_REQUEST["performanceFK"]. "')";
  

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location = 'ballets.php';
</script>