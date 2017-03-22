<?php
require 'dbConnect.php';

$sql = "UPDATE piece SET pieceName = '" . $_REQUEST["pieceName"] . "', "; 
$sql .= "composer = '" . $_REQUEST["composer"] . "', ";
$sql .= "balletFK = '" . $_REQUEST["balletFK"] . "' ";
$sql .= "where pieceName = '" . $_REQUEST["id"] . "' ";

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