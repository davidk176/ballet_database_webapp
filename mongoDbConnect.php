<?php
#echo phpinfo();
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$query = new MongoDB\Driver\Query([]);
$bulk = new MongoDB\Driver\BulkWrite;

?>