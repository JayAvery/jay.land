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
        
    	<label for="paste-box">Paste your link here</label>
    
    	<input type="text" id="paste-box" class="paste-box" name="paste-box"> 	
    	
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
    
    	const pasteBox = document.getElementById('paste-box');

		pasteBox.addEventListener('paste', (event) => {
		
			event.preventDefault();    
		    let rawPaste = (event.clipboardData || window.clipboardData).getData('text');
		    
		    if (!rawPaste.startsWith("https://drive.google.com")) {
		    	alert("Bad URL!");
		    	return;
		    }
		    
		    let download = rawPaste.replace("open?", "uc?").concat("&export=download");
		    
			var tableBody = document.getElementById('urls').getElementsByTagName('tbody')[0];
			var newRow = tableBody.insertRow(0);
			newRow.innerHTML = "<td>[Getting title...]</td><td>".concat(download, "</td>");
			
		    var request = new XMLHttpRequest();
    		request.onreadystatechange = function() {
      			if (this.readyState == 4 && this.status == 200) {
      			
        			var titleCell = document.getElementById('urls').getElementsByTagName('tbody')[0].getElementsByTagName('tr')[0].getElementsByTagName('td')[0];
        			titleCell.innerHTML = this.responseText.replace(" - Google Drive", "");
      			}
    		};
    		request.open("GET", "api-drive-title.php?q=" + rawPaste, true);
    		request.send();	    
		    
		    navigator.clipboard.writeText(download);
		    pasteBox.select();
		    
		});
    
    </script>

    <?php foot(); ?>

</html>
