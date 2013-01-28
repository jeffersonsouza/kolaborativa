<?php require 'datasource.php'; ?>
<!DOCTYPE html> 
<html>

    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    	<title>Kolaborativa</title> 
    	<link rel="stylesheet" href="jquery.mobile-1.2.0.min.css" />
    	<script src="jquery.js"></script>
    	<script src="jquery.mobile-1.2.0.min.js"></script>
    </head> 
    
    <body> 
        <!-- !Page -->
        <div data-role="page">
            <!-- !Header -->
        	<div data-role="header" data-position="fixed">
        		<a href="#" data-icon="home" data-iconpos="notext"></a>
        		<h1>Listas</h1>
        		<a href="#" data-icon="search" data-iconpos="notext"></a>
        	</div>
        	<!-- !Content -->
        	<div data-role="content">	
            	<ul data-role="listview"> 
            	   <?php foreach($rj->cidades as $cidade): ?>
            	   <li>
            	       <a href="#">
            	       <img src="img.jpg" />
            	       <h3>
            	       <?php echo $cidade; ?>
            	       </h3>
            	       <p>
                	       Qualquer Informação
            	       </p>
            	       </a>
            	   </li>
            	   <?php endforeach; ?>
            	</ul>
        	</div>
        	<!-- !Footer -->
        	<div data-role="footer" data-position="fixed">
        		<h4>&copy kolaborativa</h4>
        	</div>
        	
        </div>
    
    </body>
</html>