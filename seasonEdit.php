<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>NYCB: Dancers</title>
        
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
	                <li class="active"><a href="index.php">Seasons</a></li>
	                <li><a href="performances.php">Performances</a></li>
                        <li><a href="ballets.php">Ballets</a></li>
                        <li><a href="dancers.php">Dancers</a></li>
                        <li class="right"><a href="database.html">Database</a></li>
                        <li class="right"><a href="program.php">Program</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <main>
            <div id ="container">
                <div class="row">
                    <div class="col s5 offset-s1">
                        <h4 style="font-weight: 300;">Edit a Season</h4>
                        </br>
                        <form action="seasonUpdate.php">
    			<p>
        		    <label for="seasonName">Season Name:</label>
    			    <input type="text" name="seasonName" value="<?php echo $_REQUEST["seasonName"] ?>">
   			</p>
    			<p>
        		    <label for="rank">Begin Date:</label>
    			    <input type="text" name="beginDate" value="<?php echo $_REQUEST["beginDate"] ?>">
    			</p>
    			<p>
        		    <label for="rank">End Date:</label>
    			    <input type="text" name="endDate" value="<?php echo $_REQUEST["endDate"] ?>">
    			</p>
    			<p>
    			    <input type="hidden" name="id" value="<?php echo $_REQUEST["id"] ?>">
    			</p>
    			    <button class="btn waves-effect waves-light red lighten-2" type="submit" value="Submit" name="action">Submit</button>
			</form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>