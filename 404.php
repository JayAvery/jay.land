<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("404", "There's nothing here.");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main>
    
        <h3 id="introduction">There's nothing here.</h3>
        <p>If this seems like a mistake, please <a href="mailto:hi@jay.land" title="New email">contact me.</a></p>

        
    </main>
    
    <footer>
        <ul>
            <li>Page updated 2018-07-02</li>
            <li>© Jay Avery 2018</li>

    <?php foot(); ?>
<!-- Ends </footer> and </body> -->            
</html>
