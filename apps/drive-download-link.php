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
    	
    	<table id="urls">
    		<thead>
	    		<tr>
	    			<th>Document title</th>
	    			<th>URL</th>
	    		</tr>
    		</thead>
    		<tbody>
    		
    		</tbody>
    	</table>
    	
    	
    
        
    </main>
    
    <script>
    
    	const target = document.getElementById('paste-link');

		target.addEventListener('paste', (event) => {
		    
		    let paste = (event.clipboardData || window.clipboardData).getData('text');
		    

		    
		    
		    

		    
		    
		    paste = paste.replace("open?", "uc?");
		    paste = paste.concat("&export=download");
		    
		    
			var table = document.getElementById('urls').getElementsByTagName('tbody')[0];
			var row = table.insertRow(0);
			row.innerHTML = "<td>[Getting title...]</td><td>".concat(paste, "</td>");
			
		    var xmlhttp = new XMLHttpRequest();
    		xmlhttp.onreadystatechange = function() {
      			if (this.readyState == 4 && this.status == 200) {
      			

      			
      			
        			document.getElementById('urls').getElementsByTagName('tbody')[0].getElementsByTagName('tr')[0].getElementsByTagName('td')[0].innerHTML = this.responseText.replace(" - Google Drive", "");
      			}
    		};
    		xmlhttp.open("GET", "drive-title.php?q=" + paste, true);
    		xmlhttp.send();
		    

		//    var list = document.getElementById('list');
		    

		    
		    
		//    list.value = paste.concat("\n", list.value);
		    
		    
		    navigator.clipboard.writeText(paste);
		    

		    target.select();
		    
		    
		    
		    event.preventDefault();
		    
		});
    
    </script>

    <?php foot(); ?>

</html>
