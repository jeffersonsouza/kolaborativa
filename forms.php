<!DOCTYPE html> 
<html>

    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    	<title>Forms</title> 
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
        		<h1>Formulários</h1>
        		<a href="#" data-icon="search" data-iconpos="notext"></a>
        	</div>
        	<!-- !Content -->
        	<div data-role="content">	
            	<form action="" method="post" accept-charset="utf-8">
            	   <div data-role="fieldcontain">
        	         <label for="name">Text Input:</label>
        	         <input type="text" name="name" id="name" value=""  />
        			</div>
        
        			<div data-role="fieldcontain">
        			<label for="textarea">Textarea:</label>
        			<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
        			</div>
        
        			<div data-role="fieldcontain">
        	         <label for="search">Search Input:</label>
        	         <input type="search" name="password" id="search" value=""  />
        			</div>
        
        			<div data-role="fieldcontain">
        				<label for="slider2">Flip switch:</label>
        				<select name="slider2" id="slider2" data-role="slider">
        					<option value="off">Off</option>
        					<option value="on">On</option>
        				</select>
        			</div>
        
        			<div data-role="fieldcontain">
        				<label for="slider">Slider:</label>
        			 	<input type="range" name="slider" id="slider" value="50" min="0" max="100" data-highlight="true"  />
        			</div>
        
        			<div data-role="fieldcontain">
        			<fieldset data-role="controlgroup">
        				<legend>Choose as many snacks as you'd like:</legend>
        				<input type="checkbox" name="checkbox-1a" id="checkbox-1a" class="custom" />
        				<label for="checkbox-1a">Cheetos</label>
        
        				<input type="checkbox" name="checkbox-2a" id="checkbox-2a" class="custom" />
        				<label for="checkbox-2a">Doritos</label>
        
        				<input type="checkbox" name="checkbox-3a" id="checkbox-3a" class="custom" />
        				<label for="checkbox-3a">Fritos</label>
        
        				<input type="checkbox" name="checkbox-4a" id="checkbox-4a" class="custom" />
        				<label for="checkbox-4a">Sun Chips</label>
        		    </fieldset>
        			</div>
        
        			<div data-role="fieldcontain">
        			<fieldset data-role="controlgroup" data-type="horizontal">
        		    	<legend>Font styling:</legend>
        		    	<input type="checkbox" name="checkbox-6" id="checkbox-6" class="custom" />
        				<label for="checkbox-6">b</label>
        
        				<input type="checkbox" name="checkbox-7" id="checkbox-7" class="custom" />
        				<label for="checkbox-7"><em>i</em></label>
        
        				<input type="checkbox" name="checkbox-8" id="checkbox-8" class="custom" />
        				<label for="checkbox-8">u</label>
        		    </fieldset>
        			</div>
        
        			<div data-role="fieldcontain">
        			    <fieldset data-role="controlgroup">
        			    	<legend>Choose a pet:</legend>
        			         	<input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
        			         	<label for="radio-choice-1">Cat</label>
        
        			         	<input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
        			         	<label for="radio-choice-2">Dog</label>
        
        			         	<input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
        			         	<label for="radio-choice-3">Hamster</label>
        
        			         	<input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />
        			         	<label for="radio-choice-4">Lizard</label>
        			    </fieldset>
        			</div>	
            	</form>
        	</div>
        	<!-- !Footer -->
        	<div data-role="footer" data-position="fixed">
        		<h4>&copy kolaborativa</h4>
        	</div>
        	
        </div>
    
    </body>
</html>