<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Plants and fungi", "Photographs of british wild plants, moss, and fungi");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main class="wide">
        
        <h3 id="introduction">Photographs of british wild plants, moss, and fungi.</h3>
    
        <article class="gallery">
            
            <?php
                $images = array(
                    '6004' => 'Catherine's moss capsule',
                    '6005' => 'Candlesnuff fungus',
                    '6006' => 'Hypnum moss',
                    '6007' => 'Moss landscape',
                    '6008' => 'Frosted moss',
                    '6009' => 'Frosty moss capsules',
                    '9309' => 'Common liverwort',
                    '9614' => 'Moss pillow'
                );
                gallery($images);
            ?>
            
        </article>
        
    </main>

    <?php foot(); ?>
</html>
