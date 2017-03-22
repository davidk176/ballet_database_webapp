<?php
require 'dbConnect.php';

$sql = "DELETE FROM ballet WHERE balletName = '" . $_REQUEST["id"] . "'";

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