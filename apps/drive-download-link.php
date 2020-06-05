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
    	
    	<p class="result">[result]</p>
    
        
    </main>
    
    <script>
    
    	const target = document.querySelector('#paste-link');

		target.addEventListener('paste', (event) => {
		    let paste = (event.clipboardData || window.clipboardData).getData('text');
		    paste = paste.toUpperCase();
		 
		    document.querySelector('#result').innerHTML = paste;
		    
		});
    
    </script>

    <?php foot(); ?>

</html>
