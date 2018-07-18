<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        http_response_code(404);
        head("404", "There's nothing here.");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main class="narrow">
    
        <h3 id="introduction">There's nothing here.</h3>
        <section>
        <p>If this seems like a mistake, please <a href="mailto:hi@jay.land" title="New email">contact me.</a></p>
        </section>
        
    </main>
    
    <?php foot(); ?>
            
</html>
