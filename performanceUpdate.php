<?php
require 'mongoDbConnect.php';

$bulk->update(
    ['performanceName' => $_REQUEST["performanceName"]],
    ['$set' => ['performanceDate' => $_REQUEST["performanceDate"]]],
    ['multi' => false, 'upsert' => false]
);


?>

<script>
    window.location = 'performances.php';
</script>