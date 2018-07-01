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
        
        <?php breadcrumb(); ?>
                
    </header>
    
    <main>
                        
        <h3 id="introduction">Multi-purpose nerd. I like programming, science, nature, making things, and fictional characters.</h3>
        
        <section id="contact">
            <h4 class="section">Contact me directly</h4>
            <ul>
                <li>Email - <a href="mailto:hi@jay.land" title="New email">hi@jay.land</a></li>
                <li>Telegram - <a href="https://t.me/JayAvery" title="Telegram chat">@JayAvery</a></li>
            </ul>
        </section>
        
        <section id="follow">
            <h4 class="section">Follow me for project updates, wildlife, my rabbit, and general nerd talk</h4>
            <ul>
                <li>Twitter - <a href="https://twitter.com/_jayavery" title="Twitter profile">@_JayAvery</a></li>
                <li>Instagram - <a href="https://www.instagram.com/_jayavery/" title="Instagram profile">@_JayAvery</a></li>
            </ul>
        </section>
        
        <section id="work">
            <h4 class="section">Look at stuff I do</h4>
            <ul>
                <li>Code on <a href="https://github.com/JayAvery" title="GitHub profile">GitHub</a></li>
                <li>Minecraft mods for <a href="https://minecraft.curseforge.com/members/JayAvery/projects" title="CurseForge author profile">Forge</a> and <a href="https://www.spigotmc.org/resources/authors/jayavery.452238/" ttle="Spigot author profile">Spigot/Bukkit</a></li>
                <li>Knitting patterns on <a href="https://www.ravelry.com/designers/jay-avery" title="Ravelry designer profile">Ravelry</a></li>
                <li>Hand-bleached nerd t-shirts on <a href="https://www.etsy.com/shop/nerditee" title="Etsy shop">Etsy</a></li>
                <li>Articles about <a href="/autism" title="Autism articles list">autism and disability</a></li>
                <li>Articles and pictures of <a href="/creative" title="Creative articles list">creative projects</a></li>
                <li>Best of <a href="/photography" title="Photography galleries">photography</a></li>
            </ul>
        </section>
        
        <section id="support">
            <h4 class="section">Support me</h4>
            <ul>
                <li><a href="paypal.me/jayvery" title="PayPal me">PayPal</a></li>
            </ul>
        </section>
        
    </main>
</body>

</html>
