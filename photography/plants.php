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
                	'1886' => 'Atrichum undulatum',
                	'1892' => 'Polytrichastrum formosum',
                	'1903' => 'Dicranella heteromalla',
                	'1925' => 'Brachythecium rutabulum',
                	'2086' => 'Polytrichum piliferum',
                    '6004' => 'Atrichum undulatum capsule',
                    '6005' => 'Candlesnuff fungus',
                    '6006' => 'Hypnum moss',
                    '6007' => 'Moss landscape',
                    '6008' => 'Frosted moss',
                    '6009' => 'Frosty moss capsules',
                    '9309' => 'Marchantia polymorpha',
                    '9614' => 'Syntrichia ruralis'
                );
                gallery('plants', $images);
            ?>
            
        </article>
        
    </main>

    <?php foot(); ?>
</html>
