<?php
require 'dbConnect.php';
$sql = "insert into piece (pieceName, composer, balletFK) VALUES ('" . $_REQUEST["pieceName"] .
  "','" . $_REQUEST["composer"] . "','" . $_REQUEST["balletFK"] . "')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location = 'pieces.php';
</script>