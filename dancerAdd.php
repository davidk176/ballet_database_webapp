<?php
require 'dbConnect.php';

$checkRank = "call checkRank(" . $_REQUEST["rank"] . ",@x)";
if($checkRank != 0){
    echo "Role must be either 'Principal' 'Soloist' or 'Corps de Ballet'";
    exit;
}
else{
$sql = "insert into dancer (dancerName, rank) VALUES ('" . $_REQUEST["dancerName"] .
  "','" . $_REQUEST["rank"] . "')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
}
?>

<script>
window.location = 'dancers.php';
</script>