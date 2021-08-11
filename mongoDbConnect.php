<?php
echo phpinfo();
$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$query = new MongoDB\Driver\Query([]);

// select a database
$rows=$m->executeQuery("ballett.performance", $query);

foreach($rows as $row){
    echo $row->performanceName;
}
?>