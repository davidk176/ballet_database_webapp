<?php
require 'dbConnect.php';

$sql = "DELETE FROM act WHERE actName = '" . $_REQUEST["id"] . "'";

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