<!doctype html>
<html lang="pt-br">
    <head>
        <meta name="theme-color" content="#085231">
        <meta name="apple-mobile-web-app-status-bar-style" content="#085231">
        <meta name="msapplication-navbutton-color" content="#085231">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="img/icon.png">
        <title>TMI - Consulta</title>
    </head>

    <body>
        <?php
        include("header.html");
        ?>

        <?php
        include("conexao.php");
        $recebido = $_POST["selecionado"];
        if (empty($recebido)) {
            header("location:plantas.php");
        }

        $resultado = $con->query("SELECT * FROM plantacao WHERE id_plantacao = '$recebido'");
        $resultado->execute();
        $linha = $resultado->fetch(PDO::FETCH_ASSOC);
        ?>

        <section class="container text-justify mt-3 py-3">
            <div>
                <img class="img img-fluid" title='<?php echo "$linha[nome]"; ?>' alt='<?php echo "$linha[nome]"; ?>' src='img/<?php echo "$linha[foto]"; ?>'>
                <h3 class="text-center">
                    <strong class="d-inline-block"><?php echo "$linha[nome]"; ?></strong>
                </h3>
                <p><strong>Temperatura:</strong> <?php echo "$linha[temperatura]"; ?></p>
                <p><strong>Água:</strong> <?php echo "$linha[agua]"; ?></p>
                <p><strong>Solo:</strong> <?php echo "$linha[solo]"; ?></p>
                <p><strong>Descrição:</strong> <?php echo "$linha[descricao]"; ?></p>
            </div>
        </section>

        <?php
        include("footer.html");
        ?>

    </body>
</html>