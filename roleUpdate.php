<?php
require 'dbConnect.php';

$sql = "UPDATE role SET dancerFK = '" . $_REQUEST["dancerFK"] . "', "; 
$sql .= "balletFK = '" . $_REQUEST["balletFK"] . "', ";
$sql .= "where dancerFK = '" . $_REQUEST["dancerID"] . "', ";
$sql .= "balletFK = '" . $_REQUEST["balletID"] . "' ";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
    window.location = 'roles.php';
</script>