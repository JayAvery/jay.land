<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head('Google Drive download link converter', 'Simple conversion from Google Drive link to direct download link.');
    ?>
 <!-- Ends <head> and starts <body> -->    
        
    <main class="narrow">
    
    <p id="test">blank</p>
    
    	<label for="paste-link">Paste your link here</label>
    
    	<input type="text" id="paste-link" class="paste-link" name="paste-link">
    	    	    	
    	
    	<br>
    	
    	<label for="list">All converted URLs</label>
    	
    	<textarea id="list" class="list" name="list"></textarea>
    
        
    </main>
    
    <script>
    
    	const target = document.getElementById('paste-link');

		target.addEventListener('paste', (event) => {
		    
		    let paste = (event.clipboardData || window.clipboardData).getData('text');
		    

		    
		    
		    
		    var xmlhttp = new XMLHttpRequest();
    		xmlhttp.onreadystatechange = function() {
      			if (this.readyState == 4 && this.status == 200) {
        			document.getElementById("test").innerHTML = this.responseText.replace(" - Google Drive", "");
      			}
    		};
    		xmlhttp.open("GET", "drive-title.php?q=" + paste, true);
    		xmlhttp.send();
		    
		    
		    paste = paste.replace("open?", "uc?");
		    paste = paste.concat("&export=download");
		    

		    var list = document.getElementById('list');
		    

		    
		    
		    list.value = paste.concat("\n", list.value);
		    
		    
		    navigator.clipboard.writeText(paste);
		    

		    target.select();
		    
		    
		    
		    event.preventDefault();
		    
		});
    
    </script>

    <?php foot(); ?>

</html>
