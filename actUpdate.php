<?php
require 'dbConnect.php';

$sql = "UPDATE act SET actName = '" . $_REQUEST["actName"] . "', "; 
$sql .= "balletFK = '" . $_REQUEST["balletFK"] . "' ";
$sql .= "where actName = '" . $_REQUEST["id"] . "' ";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
    window.location = 'acts.php';
</script>