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
    
    	<label for="paste-link">Paste your link here</label>
    
    	<input type="text" id="paste-link" class="paste-link" name="paste-link">
    	
    	<br>
    	
    	<label for="result">Converted URL</label>
    	
    	<textarea display="none" id="result" class="result" name="result"></textarea>
    	
    	<br>
    	
    	<label for="list">All converted URLs</label>
    	
    	<textarea id="list" class="list" name="list"></textarea>
    
        
    </main>
    
    <script>
    
    	const target = document.getElementById('paste-link');

		target.addEventListener('paste', (event) => {
		    let paste = (event.clipboardData || window.clipboardData).getData('text');
		  //  target.value = paste;
		    
		    
		 //   const html = (await (await fetch(paste)).text()); // html as text
		//	const title = new DOMParser().parseFromString(html, 'text/html').title;
		    
		    
		    paste = paste.replace("open?", "uc?");
		    paste = paste.concat("&export=download");
		    var pasted = document.getElementById('result');
		    var list = document.getElementById('list');
		    

		    
		    
		    pasted.value = paste;
		    list.value = paste.concat(list.value, "\n");
		    
		    pasted.select();
		    document.execCommand("copy");
		    target.select();
		    
		    
		    
		    event.preventDefault();
		    
		});
    
    </script>

    <?php foot(); ?>

</html>
