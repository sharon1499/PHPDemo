<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="/template/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrap">

    <header>
        <h1><?php site_name(); ?></h1>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>
    <img src="https://ec.europa.eu/jrc/sites/jrcsh/files/styles/normal-responsive/public/adobestock_21730836.jpeg?itok=uSbzpqGq" height="300" width="100%">

    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?><p>Buzz Buzz &#128029;</p></small>
    </footer>
</div>
</body>
</html>