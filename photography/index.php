<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Photography", "Photographs of British wildlife and remains");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main>
    
        <h3 id="introduction">I take photos of my wildlife adventures.</h3>
        
        <section class="contents">
            <article>
                <h4 class="article"><a href="/photography/living">Living</a></h4>
                <p class="summary">Photographs of live British wildlife.</p>
            </article>
            <article>
            	<h4 class="article"><a href="/photography/remains">Remains</a></h4>
            	<p class="summary">Photographs of wild collected bones.</p>
            </article>
        </section>
        
    </main>
    
    <footer>
        <ul>
            <li>Page updated 2018-07-02</li>
            <li>© Jay Avery 2018</li>

    <?php foot(); ?>
</html>
