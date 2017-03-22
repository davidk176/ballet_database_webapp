<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>NYCB: Program</title>
        
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
    
        <div class="row" id ="header">
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
	                <li><a href="performances.php">Performances</a></li>
                        <li><a href="ballets.php">Ballets</a></li>
                        <li><a href="pieces.php">Pieces</a></li>
                        <li><a href="roles.php">Roles</a></li>
                        <li><a href="dancers.php">Dancers</a></li>
                        <li class="right"><a href="database.html">Database</a></li>
                        <li class="right active"><a href="program.php">Program</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <main>
            <div id ="container">
                <div class="row">
                    <div class="col s5 offset-s1">
                        <h4 style="font-weight: 300; display:inline-block;">Program</h4>
                        
                        <?php
			require 'dbConnect.php';
			
			$sql = "SELECT seasonName, beginDate, endDate, count(balletName) as balletCount, count(dancerFK) as dancerCount
				FROM programView
				GROUP BY seasonName";
				
			$result = $mysqli->query($sql);
		    	$result->data_seek(0);
		    	
		    	//print seasons and performances	
		    	echo "<ul>";
		    	
		    	$lastSeason = $season["seasonName"];
			while($season = $result->fetch_assoc()) {
			    $currentSeason = $season["seasonName"];
			    if($lastSeason != $currentSeason){
			        echo '</br><li style="font-weight: 450; display:inline-block;">' . $season["seasonName"] . '</li><li class="right" style="font-weight: 300;">' . $season["beginDate"] . ' - ' . $season["endDate"] . '</li>';
		    	    }
		    	    
		    	    echo "<ul>";
			    echo '<li style="font-weight: 300;"> - Number of Ballets: ' . $season["balletCount"] . '</li>';
			    echo '<li style="font-weight: 300;"> - Number of Dancers: ' . $season["dancerCount"] . '</li>';
			    echo "</ul>";
			    
			    $lastSeason = $season["seasonName"];
			}
			echo "</ul>";
			?>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>