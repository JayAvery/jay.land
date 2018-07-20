<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Photography", "Photographs of British wildlife and remains");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main class="narrow">
    
        <h3 id="introduction">I take photos of my wildlife adventures.</h3>
        
        <a class="article" href="/photography/living"><section>
            <h4>Living</h4>
            <p>Photographs of live British wildlife.</p>
            <img class="article-thumb" src="/images/IMG_1415.jpg">
        </section></a>
        <a class="article" href="/photography/remains"><section>
            <h4>Remains</h4>
            <p>Photographs of wild collected bones.</p>
            <img class="article-thumb" src="/images/IMG_2970.jpg">
        </section></a>
        
    </main>
    
    <?php foot(); ?>
</html>
