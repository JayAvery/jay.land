<?php

    $colours = array('00c8cc', 'd5a7ff', 'a2adff', '89ccff', 'b9d7a0', 'ebcd29', '75c471', 'cd9ee0', 'b8d23f', '7db9eb', 'f1ae72');
    $colour = $colours[array_rand($colours)];

    /* Standard elements to start every page. */
    function head($title, $description) {
        
        global $colour;
        
        ?>

        <!-- Continuing <head> -->
            <!-- Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121670751-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'UA-121670751-1');
            </script>

            <!-- Basic info -->
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Styles and fonts -->
            <link rel="stylesheet" href="/includes/normalize.css">
            <link rel="stylesheet" href="/includes/simplelightbox.css">
            <link rel="stylesheet" href="/includes/style.css">
            <link href="https://fonts.googleapis.com/css?family=Muli:400,800" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:300,400,700" rel="stylesheet">
            <style>
                :root {
                    --links: <?php echo '#' . $colour; ?>
                }
            </style>

            <!-- Favicons -->
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
            <link rel="manifest" href="/site.webmanifest">
            <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#2385a1">
            <meta name="msapplication-TileColor" content="#00aba9">
            <meta name="theme-color" content="#ffffff">

            <!-- Page info -->
            <title><?php echo $title; ?></title>
            <meta name="description" content="<?php echo $description; ?>">
        </head>

        <body>
            <!--[if lte IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->

            <header>
                
                <?php 
                // Open heading
		        echo '<h2 id="breadcrumb">';
		        // Homepage link
		        echo '<span class="breadcrumb-home"><a href="/" title="Home">Jay Avery</a> &gt; </span>';
                if ('Jay Avery' != $title) {
                    // Expand span for mobile
                    echo '<span tabindex="0" class="breadcrumb-dots"></span><span class="breadcrumb-expand">';
                }
		        
		        // Get path and page names and addresses
		        $url = pathinfo(strtok($_SERVER['REQUEST_URI'], '?'));
		        $folder_path = $url['dirname'];
		        $folder_name = ucwords(str_replace('-', ' ', trim($folder_path, '/')));
		
                // 404 page
                if (http_response_code() === 404) {
                    
                    echo '<span class="breadcrumb-404">404</span>';
                    
                // Page and category
                } else if (!empty($folder_name)) {
		
		            echo '<span class="breadcrumb-category"><a href="' . $folder_path . '" title="Category">' . $folder_name . '</a> &gt; </span>';
                    echo '<span class="breadcrumb-page"><a href="" title="Current page">' . $title . '</a></span>';
                    
                // Category page
		        } else if ('Jay Avery' != $title) {
                    
                    echo '<span class="breadcrumb-page"><a href="" title="Current page">' . $title . '</a> &gt;</span>';
                }
        
                if ('Jay Avery' != $title) {
                    // End expand span for mobile
                    echo '</span>';
                }
                    
                ?>
                
                <h2 id="email"><a href="mailto:me@jay.land" title="New email">@</a></h2>
                
            </header>
        <?php
    }

    /* Add a section if the page was reached from an ?autisticality query URL (a redirect). */
    function query_redirect() {
        
        if ($_SERVER['QUERY_STRING'] === 'autisticality') {

            echo "<section id='redirect'>
                <p>This site is the new home of my best autism articles!</p>
            </section>";
        }
    }

    /* Take a map of image numbers and captions and output a shuffled gallery of lightbox thumbnails. */
    function gallery($images) {
        
        $numbers = array_keys($images);
        shuffle($numbers);
        
        foreach($numbers as $number) {
            
            
            echo '<figure><a class="lightbox" href="/images/IMG_' . $number . '.JPG" title="' . $images[$number] . '"><img class="thumb" src="/images/IMG_' . $number . '_T.JPG"/></a></figure>';
        }
    }

    /* Standard elements to end every page. */
    function foot() {
        ?>
        
            <div class="footer-row"><footer>
                <p id="left-foot"><span>Made pretty with help from <a href="http://nicolasgallagher.com/about-normalize-css/" title="normalize.css source">normalize.css</a>, <a href="http://simplelightbox.com/">Simple Lightbox</a>, and <a href="https://samdraws.com/" title="Sam Draws">Sam Rowe</a>.</span></p>
                <p id="right-foot"><span>© Jay Avery 2018</span></p>
            </footer>
            </div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            
            <script src="/includes/simple-lightbox.js"></script><script>
                $(function(){
                    var $gallery = $('a.lightbox').simpleLightbox();
                });
            </script>

        </body>

        <?php
    }
?>