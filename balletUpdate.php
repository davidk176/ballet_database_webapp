<?php
require 'dbConnect.php';

$sql = "UPDATE ballet SET balletName = '" . $_REQUEST["balletName"] . "', "; 
$sql .= "description = '" . $_REQUEST["description"] . "', ";
$sql .= "choreography = '" . $_REQUEST["choreography"] . "', ";
$sql .= "performanceFK = '" . $_REQUEST["performanceFK"] . "' ";
$sql .= "where balletName = '" . $_REQUEST["id"] . "' ";

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