<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Photography", "Photographs of wildlife and living things");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main class="narrow">
    
        <h3 id="introduction">I take photos of my wildlife and farmlife adventures.</h3>
        
        <a class="article" href="/photography/animals"><article>
        	<h4>Wild animals</h4>
        	<p>Photographs of wild british birds, mammals, and insects.</p>
        	<img class="article-thumb" src="/images/IMG_1415.jpg">
    	</article></a>
    	<a class="article" href="/photography/plants"><article>
    		<h4>Plants and fungi</h4>
    		<p>Photographs of wild british plants, moss, and fungi.</p>
    		<img class="article-thumb"> src="/images/IMG_9614.jpg">
		</article></a>
		<a class="article" href="/photography/farm"><article>
			<h4>Farm animals</h4>
			<p>Photographs of british sheep.</p>
			<img class="article-thumb"> src="/images/IMG_2487.jpg">
		</article></a>
        
    </main>
    
    <?php foot(); ?>
</html>
