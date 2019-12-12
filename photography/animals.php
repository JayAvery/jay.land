<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Wild animals", "Photographs of british wild birds, mammals, and insects");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main class="wide">
        
        <h3 id="introduction">Photographs of british wild birds, mammals, and insects.</h3>
    
        <article class="gallery">
      
            <?php 
                $images = array(
                    '0547' => 'Sparrowhawk feeding on sparrow',
                    '1139' => 'Chiffchaff',
                    '1148' => 'Great tit',
                    '1415' => 'Robin',
                    '1501' => 'Female palmate newt',
                    '1589' => 'Canada gosling enjoying the daisies',
                    '1598' => 'Juvenile coot yelling',
                    '2023' => 'Scruffy long-tailed tit',
                    '2363' => 'Lurking rabbit',
                    '2400' => 'Labyrinth spider in heather',
                    '2482' => 'Pheasant',
                    '2686' => 'Dipper',
                    '3233' => 'Kingfisher in the rain',
                    '3372' => 'Robin',
                    '3458' => 'Blue tit',
                    '3554' => 'Peeping blackcap',
                    '4689' => 'Mating terns',
                    '4693' => 'Tern in flight',
                    '4790' => 'Majestic wood pigeon',
                    '4909' => 'Jay',
                    '5366' => 'Kestrel in flight',
                    '6001' => 'Dunnock',
                    '6057' => 'Sand martin in flight',
                    '6948' => 'Lapwing in flight',
                    '7040' => 'Roe buck',
                    '7240' => 'Singing corn bunting',
                    '7739' => 'Blue butterfly',
                    '8068' => 'Male stonechat',
                    '8636' => 'Goldfinch',
                    '8900' => 'Jackdaw',
                    '9115' => 'Hoverfly on thistle',
                    '9478' => 'Bloody-nosed beetle'
                );
                gallery($images); 
            ?> 
            
        </article>
        
    </main>    

    <?php foot(); ?>
            

</html>
