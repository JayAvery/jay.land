<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Live wildlife", "Photographs of live British wildlife");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main>
    
        <section class="gallery">
            
            <?php
                $images = array(
                    '5366' => 'Kestrel in flight',
                    '5278' => 'Cormorant',
                    '5192' => 'Whitethroat male feeding',
                    '5098' => 'Song thrush singing',
                    '4909' => 'Jay',
                    '4837' => 'Collared dove in flight',
                    '4731' => 'Goldfinch',
                    '4693' => 'Common tern in flight',
                    '4662' => 'Common terns courting',
                    '4083' => 'Slow worm',
                    '3554' => 'Blackcap male hiding',
                    '3458' => 'Blue tit',
                    '3372' => 'Robin',
                    '3334' => 'Goldcrest',
                    '3233' => 'Rainy kingfisher',
                    '3129' => 'Long-tailed tit',
                    '1598' => 'Coot juvenile calling',
                    '1139' => 'Chiffchaff',
                    '0547' => 'Sparrowhawk and sparrow prey',
                    '2487' => 'Smiling sheep',
                    '2455' => 'Wandering sheep',
                    '2482' => 'Pheasant male juvenile',
                    '2363' => 'Rabbit hiding',
                    '1415' => 'Robin',
                    '1148' => 'Great tit',
                );
                gallery($images);
            ?>
            
        </section>
        
    </main>
    
    <footer>
        <ul>
            <li>© Jay Avery 2018</li>
            <li><a href="http://nicolasgallagher.com/about-normalize-css/" title="normalize.css source">normalize.css</a></li>
            <li><a href="https://lokeshdhakar.com/projects/lightbox2/">Lightbox</a></li>
        </ul>
    </footer>
    
    <script src="/includes/lightbox-plus-jquery.js"></script>
    
</body>
</html>
