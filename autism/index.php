<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Autism", "I write articles about being autistic.");
    ?>
<!-- Ends <head> and starts <body> -->    
    
    <main class="narrow">
       
        <?php query_redirect(); ?>
        
        <h3 id="introduction">I write about being autistic.</h3>
        
        <a class="article" href="/autism/inclusive-autistic-traits"><article>
            <h4>Inclusive Autistic Traits</h4>
            <p class="summary">This is my best attempt at an <em>inclusive</em>, <em>accurate</em>, <em>useful</em>, and <em>value-neutral</em>, description of autistic traits and autistic people.</p>
        </article></a>
        
        <a class="article" href="/autism/trans-and-autism"><article>    
            <h4>Trans and autism</h4>
            <p class="summary">Blaming trans identities on autism hurts everyone.</p>
        </article></a>
        
    </main>
    
    <?php foot(); ?>
</html>
