<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Creative", "Articles and pictures of my creative projects");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main class="narrow">
    
                
        <h3 id="introduction">I make things a lot.</h3>
        
        <a class="article" href="/creative/mask"><article>
        	<h4 class="article">Fabric face mask tutorial</h4>
        	<p class="summary">A picture tutorial for fabric face masks.</p>
    	</article></a>
        
        <a class="article" href="/creative/humancube"><article>
            <h4 class="article">The Humancube</h4>
            <p class="summary">I made a weird piece of furniture.</p>
        </article></a>
        
    </main>
            
    <?php foot(); ?>

</html>
