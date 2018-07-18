<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Remains", "Photographs of wild collected bones");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main class="wide">
        
        <h3 id="introduction">Photographs of wild collected bones.</h3>
    
        <section class="gallery">
            
            <?php
                $images = array(
                    '2822' => 'Labelled disassembled mole skeleton',
                	'2850' => 'Mole skull',
                	'2860' => 'Rabbit lower jaw',
                	'2864' => 'Rabbit skull',
                	'2881' => 'Disassembled vole skeleton',
                	'2970' => 'Rearticulated vole skeleton',
                	'3854' => 'Young fox spine',
                	'3861' => 'Young fox ribs',
                	'3864' => 'Young unfused fox leg bones',
                	'3867' => 'Young fox scapulae and pelvis',
                	'3876' => 'Young fox lower jaw and teeth',
                	'3884' => 'Young fox skull and teeth',
                	'3894' => 'Young fox skull',
                );
                gallery($images);
            ?>
            
        </section>
        
    </main>

    <?php foot(); ?>
</html>
