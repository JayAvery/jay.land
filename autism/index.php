<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Autism", "I write articles about being autistic.");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main>
       
        <?php query_redirect(); ?>
        
        <h3 id="introduction">I write about being autistic.</h3>
        
        <section class="contents">
            <article>
                <h4 class="article"><a href="/autism/inclusive-autistic-traits">Inclusive Autistic Traits</a></h4>
                <p class="summary">This isn’t a set of diagnostic criteria, because I don’t know how to diagnose autism. It’s my best attempt at an <em>inclusive</em>, <em>accurate</em>, <em>useful</em>, and <em>value-neutral</em>, description of autistic traits and autistic people.</p>
            </article>
        </section>
        
    </main>
    
    <footer>
        <ul>
            <li>Page updated 2018-07-02</li>
            <li>© Jay Avery 2018</li>
            
    <?php foot(); ?>
</html>
