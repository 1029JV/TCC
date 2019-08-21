<!doctype html>
<html lang="pt-br">
    <head>
        <meta name="theme-color" content="#085231">
        <meta name="apple-mobile-web-app-status-bar-style" content="#085231">
        <meta name="msapplication-navbutton-color" content="#085231">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/icon.png">
        <title>TMI - Mapa</title>
    </head>

    <body>
        <?php
        include("header.html");
        ?>

        <section class="mt-3 py-3 container">
            <div class=" text-center">
                <h2>Mapa</h2>
                <iframe src="http://www.inmet.gov.br/sonabra/maps/pg_mapa.php" width="100%" height="600px" frameborder="0"></iframe>
            </div>
        </section>

        <?php
        include("footer.html");
        ?>
    </body>
</html>