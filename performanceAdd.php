<?php
require 'mongoDbConnect.php';


$insertPerf = array(
    'performanceName' => $_REQUEST["performanceName"],
    'performanceDate' => $_REQUEST["performanceDate"],
    'season' => $_REQUEST["seasonFK"],
);
$bulk->insert($insertPerf);

$result = $manager->executeBulkWrite('ballett.performance', $bulk);

echo $result->getInsertedCount();

?>

<script>
    window.location = 'performances.php';
</script>