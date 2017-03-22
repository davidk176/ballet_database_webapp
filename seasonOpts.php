<?php
require 'dbConnect.php';

$sql = "SELECT seasonID, seasonName FROM season";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
while($season = $result->fetch_assoc()) {
//  
 echo "<option ";
 if(substr($_REQUEST["id"],0,4) == $season["seasonID"])
   echo "selected "; 
 echo "value='" . $dept["seasonID"] . "'>" . $dept["seasonName"] .
      "</option>";
}
?>
