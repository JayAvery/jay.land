<!doctype html>
<html lang="en-UK">

<head>
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
    <link rel="stylesheet" href="/includes/normalize.css">
    <!-- Include the main functions file from the root directory -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
    ?>
    
    <!-- Page info -->
    <title>Jay Avery</title>
    <meta name="description" content="Jay Avery Homepage">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <header>
        
        <?php
            breadcrumb();
            query_redirect();
        ?>
        
    </header>
    
    <main>
       
        
    </main>
</body>

</html>
