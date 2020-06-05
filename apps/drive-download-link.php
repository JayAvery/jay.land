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
    
    	<input type="text" id="paste-link" class="paste-link" name="paste-link">
    	
    	<br>
    	
    	<textarea id="result" class="result" name="result"></textarea>
    	
    	<br>
    	
    	<textarea id="list" class="list" name="list"></textarea>
    
        
    </main>
    
    <script>
    
    	const target = document.getElementById('paste-link');

		target.addEventListener('paste', (event) => {
		    let paste = (event.clipboardData || window.clipboardData).getData('text');
		  //  target.value = paste;
		    
		    
		    paste = paste.toUpperCase();
		    var pasted = document.getElementById('result');
		    var list = document.getElementById('list');
		    pasted.value = paste;
		    list.value = list.value.concat("\n", paste);
		    
		    pasted.select();
		    document.execCommand("copy");
		    target.select();
		    
		    
		    
		    event.preventDefault();
		    
		});
    
    </script>

    <?php foot(); ?>

</html>
