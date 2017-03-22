<?php
require 'dbConnect.php';
$sql = "insert into act (actName, balletFK) VALUES ('" . $_REQUEST["actName"] . "','" . $_REQUEST["balletFK"]. "')";
  

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