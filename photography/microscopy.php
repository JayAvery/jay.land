<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Microscopy", "Photographs through the microscope");
    ?>
 <!-- Ends <head> and starts <body> -->    
        
    <main class="wide">
    
    	<h3 id="introduction">Photographs through the microscope.</h3>
    	
    	<article class="gallery">
    	
    		<?php
    			$images = array(
    				'1404' => 'Calypogeia arguta leaf',
    				'1416' => 'Metzgeria furcata rhizoids',
    				'1420' => 'Metzgeria furcata growing tips',
    				'1516' => 'Unidentified pleurocarp',
    				'1535' => 'Air bubbles',
    				'1552' => 'Thuidium tamariscinum',
    				'1568' => 'Rhizomnium punctatum leaf tip',
    				'1706' => 'Unidentified pleurocarp',
    				'1795' => 'Diplophyllum albicans leaf cells',
    				'1834' => 'Plagiomnium undulatum leaf tip',
    				'1870' => 'Didymodon nicholsonii',
    				'2435' => 'Pogonatum aloides capsule teeth',
    				'2440' => 'Moss spores',
    				'2453' => 'Ditrichum heteromallum',
    				'2454' => 'Dicranella heteromalla capsule with spores',
    				'2490' => 'Sphagnum quinquefarium branch',
    				'2506' => 'Frullania tamarisci shoots',
    				'2512' => 'Frullania tamarisci leaves',
    				'2517' => 'Frullania tamarisci underleaves',
    				'3141' => 'Brachythecium rutabulum capsule'
    			);
    			gallery('microscopy', $images);
			?>
			
		</article>    
        
    </main>

    <?php foot(); ?>

</html>
