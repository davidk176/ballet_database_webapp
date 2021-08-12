<?php
require 'mongoDbConnect.php';

$bulk->delete(['performanceName' => $_REQUEST["name"]]);
$result = $manager->executeBulkWrite('ballett.performance', $bulk);

?>

<script>
window.location = 'performances.php';
</script>