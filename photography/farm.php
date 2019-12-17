<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Farm animals", "Photographs of british farm animals");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main class="wide">
        
        <h3 id="introduction">Photographs of british farm animals.</h3>
    
        <article class="gallery">
            
            <?php
                $images = array(
                    '2412' => 'Mouthful',
                    '2418' => 'Relaxed smile',
                    '2424' => 'Laughing',
                    '2451' => 'Scrambling',
                    '2455' => 'Goodbye',
                    '2487' => 'Smile',
                    '6010' => 'Hello',
		    '2491' => 'Curious',
		    '2488' => 'Yelling'
                );
                gallery($images);
            ?>
            
        </article>
        
    </main>

    <?php foot(); ?>
</html>
