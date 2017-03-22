<?php
require 'dbConnect.php';
$sql = "insert into role (dancerFK, balletFK) VALUES ('" . $_REQUEST["dancerFK"] .
  "','" . $_REQUEST["balletFK"] . "')";
  

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