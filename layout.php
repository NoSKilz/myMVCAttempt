<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <title>Some title</title>
        <link rel="canonical" href="http://www.bstst.8u.cz">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="keywords" content="maturita,eshop" >
        <meta name="description" content="Projekt dlouhodobé maturitní práce.">
        <!--GOOGLE+-->
        <link rel="author" href="https://plus.google.com/u/0/115111710746527975391">
        <link rel="publisher" href="">
        <link type="text/css" href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
        <link type="text/css" href="custom/css/main.min.css" rel="stylesheet">
        <link rel="icon" type="image/gif" href="favicon.ico" />
    </head>
    <body>
        <noscript>
            K správnému chodu stránky je potřeba mít aktivovaný JavaScript.
        </noscript>
        <div id="content">
            <?php
                require_once "view/{$v}View.php";
            ?>
        </div>
        <script src="custom/js/main.script.min.js" nonce="<?php echo $nonce;?>"></script>
        <script src="custom/js/suggestions.min.js" nonce="<?php echo $nonce;?>"></script>
        <script src="custom/js/load_more.min.js" nonce="<?php echo $nonce;?>"></script>
    </body>
</html>
