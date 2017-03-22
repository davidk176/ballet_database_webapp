<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>NYCB: Pieces</title>
        
        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="styles/main.css">
        
        <!-- Materialize JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <!-- FontAwesome CSS -->
        <script src="https://use.fontawesome.com/2b785d4755.js"></script>
        <!-- Custom JavaScript -->
        <script src="scripts/main.js"></script>
        
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
                        <li class="active"><a href="pieces.php">Pieces</a></li>
                        <li><a href="dancers.php">Dancers</a></li>
                        <li class="right"><a href="database.html">Database</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <main>
            <div id ="container">
                <div class="row">
                    <div class="col s5 offset-s1">
                        <h4 style="font-weight: 300;">Add a Piece</h4>
                        </br>
                        <form action="pieceAdd.php" method="post">
    			<p>
        		    <label for="pieceName">Piece Name:</label>
        		    <input type="text" name="pieceName" id="piceName">
   			</p>
    			<p>
        		    <label for="composer">Compser:</label>
        		    <input type="text" name="composer" id="composer">
    			</p>
    			<p>
        		    <label for="balletFK">Ballet Name (
        		    <?php
				require 'dbConnect.php';
			
				$sql = "SELECT balletName
					FROM ballet";
				$result = $mysqli->query($sql);
		    		$result->data_seek(0);
		    	
		    		//print ballets
				while($ballets = $result->fetch_assoc()) { 
			    	    echo '"' . $ballets["balletName"] . '" ';
			        }
			    ?>
        		    ):</label>
        		    <input type="text" name="balletFK" value="<?php echo $_REQUEST["balletFK"] ?>">
    			</p>
    			    <button class="btn waves-effect waves-light red lighten-2" type="submit" value="Submit" name="action">Submit</button>
			</form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>