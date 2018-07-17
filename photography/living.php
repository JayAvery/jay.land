<!doctype html>
<html lang="en-UK">

<head>
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
        head("Live wildlife", "Photographs of live British wildlife");
    ?>
<!-- Ends <head> and starts <body> -->    
        
    <main class="wide">
        
        <h3 id="introduction">Photographs of British wildlife.</h3>
    
        <section class="gallery">
            
<figure><a href="/images/IMG_4837.JPG" title="Collared dove in flightsdfibuhaiubrsiuthbosiuthbosiuhbsiuhbsoi sohsi hosh ofh oifhg osifgh osifhg osihfg osig soih"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_1415.JPG" data-lightbox="gallery" data-title="Robin"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_2363.JPG" data-lightbox="gallery" data-title="Rabbit hiding"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_4837.JPG" data-lightbox="gallery" data-title="Collared dove in flight"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_1415.JPG" data-lightbox="gallery" data-title="Robin"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_2363.JPG" data-lightbox="gallery" data-title="Rabbit hiding"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_4837.JPG" data-lightbox="gallery" data-title="Collared dove in flight"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_1415.JPG" data-lightbox="gallery" data-title="Robin"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_2363.JPG" data-lightbox="gallery" data-title="Rabbit hiding"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_4837.JPG" data-lightbox="gallery" data-title="Collared dove in flight"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_1415.JPG" data-lightbox="gallery" data-title="Robin"><img class="thumb" src="/images/square.JPG"/></a></figure><figure><a href="/images/IMG_2363.JPG" data-lightbox="gallery" data-title="Rabbit hiding"><img class="thumb" src="/images/square.JPG"/></a></figure>
            
            
            <?php /*
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
                gallery($images); */
            ?> 
            
        </section>
        
    </main>
    
            <script> 
                $(function(){
                    var $gallery = $('.gallery figure a').simpleLightbox();
                });
            </script>
    

    <?php foot(); ?>
            

</html>
