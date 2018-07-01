<?php

    /* Standard elements to start every page. */
    function head($title, $description) {
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
            <!-- Place favicon.ico in the root directory -->

            <!-- Styles and php -->
            <link rel="stylesheet" href="/css/normalize.css">


            <!-- Page info -->
            <title><?php echo $title; ?></title>
            <meta name="description" content="<?php echo $description; ?>">
        </head>

        <body>
            <!--[if lte IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->

            <header>
                <?php breadcrumb(); ?>
            </header>

        <?php
    }

    /* Build a breadcrumb title section for the current page. */
    function breadcrumb() {
        
        // Open heading
        echo '<h2 id="breadcrumb">';
        // Homepage link
        echo '<a href="/" title="Home">Jay Avery</a>';
        
        // Get path and page names and addresses
        $url = pathinfo(strtok($_SERVER['REQUEST_URI'], '?'));
        $folder_path = $url['dirname'];
        $folder_name = str_replace('-', ' ', trim($folder_path, '/'));
        $page = str_replace('-', ' ', trim($url['filename'], '/'));

        // Category link
        if (!empty($folder_name)) {

            echo ' &gt; <a href="' . $folder_path . '" title="Category">' . $folder_name . '</a>';
        }    

        // Page link
        if (!empty($page)) {

            echo ' &gt; <a href="" title="Current page">' . $page . '</a>';
        }

        // Close heading
        echo ' &gt; </h2>';
    }

    /* Add a section if the page was reached from an ?autisticality query URL (a redirect). */
    function query_redirect() {
        
        if ($_SERVER['QUERY_STRING'] === 'autisticality') {

            echo "<section id='redirect'>
                <h4 class='section'>You have been redirected here from a link to Autisticality</h4>
                <p>Autisticality doesn't exist anymore, instead my best articles are hosted here on my personal site. You may want to update your bookmark!</p>
            </section>";
        }
    }

    /* Standard elements to end every page. */
    function foot() {
        ?>
            <footer>
                <ul>
                    <li>© Jay Avery 2018</li>
                    <li><a href="http://nicolasgallagher.com/about-normalize-css/" title="normalize.css source">normalize.css</a></li>
                </ul>
            </footer>
        <?php    
    }
?>