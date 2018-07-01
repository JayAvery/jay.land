<?php
    /* Add a section if the page was reached from an ?autisticality query URL (a redirect). */
    function query_redirect() {
        
        if ($_SERVER['QUERY_STRING'] === 'autisticality') {

            echo "<section id='redirect'>
                <h4 class='section'>You have been redirected here from a link to Autisticality</h4>
                <p>Autisticality doesn't exist anymore, instead my best articles are hosted here on my personal site. You may want to update your bookmark!</p>
            </section>";
        }
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
?>