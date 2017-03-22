<?php
require 'dbConnect.php';

$rankCheck = checkRank($_REQUEST["rank"]);
if($rankCheck !=0) {
    echo "Error: Query error, rank is not either 'Principal' 'Soloist' or 'Corps de Ballet'";
    exit;
}

$sql = "UPDATE dancer SET dancerName = '" . $_REQUEST["dancerName"] . "', "; 
$sql .= "rank = '" . $_REQUEST["rank"] . "' ";
$sql .= "where dancerName = '" . $_REQUEST["id"] . "' ";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
    window.location = 'dancers.php';
</script>