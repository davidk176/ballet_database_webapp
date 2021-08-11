<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NYCB: Performances</title>

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/styles/main.css"/>

    <!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <!-- FontAwesome CSS -->
    <script src="https://use.fontawesome.com/2b785d4755.js"></script>

    <!--Google Analytics-->

</head>

<body>

<div class="row" id="header">
    <header>
        <div class="col s10 offset-s1">
            <h1 id="logo">New York City Ballet</h1>
        </div>
    </header>
</div>

<div class="row">
    <nav>
        <div class="col s10 offset-s1 nav-wrapper">
            <ul>
                <li><a href="index.php">Seasons</a></li>
                <li class="active"><a href="performances.php">Performances</a></li>
                <li><a href="ballets.php">Ballets</a></li>
                <li><a href="pieces.php">Pieces</a></li>
                <li><a href="acts.php">Acts</a></li>
                <li><a href="roles.php">Roles</a></li>
                <li><a href="dancers.php">Dancers</a></li>
                <li class="right"><a href="database.html">Database</a></li>
                <li class="right"><a href="program.php">Program</a></li>
            </ul>
        </div>
    </nav>
</div>

<main>
    <div id="container">
        <div class="row">
            <div class="col s5 offset-s1">
                <h4 style="font-weight: 300; display:inline-block;">Performances</h4>
                <a class="right btn-floating btn-medium waves-effect waves-light grey" href="performanceAddHtm.php"><i
                            class="fa fa-plus"></i></a>
                <?php
                require 'mongoDbConnect.php';

                $rows = $manager->executeQuery("ballett.performance", $query);

                //print performances
                echo "<ul>";

                foreach ($rows as $row) {
                    $id = $row->performanceName;
                    echo '</br><li style="font-weight: 450; display:inline-block;">' . $row->performanceName;
                    echo " <a href='performanceDelete.php?id=" . $id . "'><i class='fa fa-trash'></i></a> " . " <a href='performanceEdit.php?id=" . $id . "'><i class='fa fa-pencil'></i></a>";
                    echo '</li><li class="right" style="font-weight: 300;">' . $row->performanceDate . '</li>';
                }
                echo "</ul>";
                ?>
            </div>
        </div>
    </div>
</main>
</body>
</html>