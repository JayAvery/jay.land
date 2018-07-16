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
            <img class="gallery-thumb" src="/images/IMG_0547_T.jpg">
        </section></a>
        <section>
            <h4><a href="/photography/remains">Remains</a></h4>
            <p>Photographs of wild collected bones.</p>
        </section>
        
    </main>
    
    <?php foot(); ?>
</html>
