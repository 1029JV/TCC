<!doctype html>
<html lang="pt-br">
    <head>
        <meta name="theme-color" content="#085231">
        <meta name="apple-mobile-web-app-status-bar-style" content="#085231">
        <meta name="msapplication-navbutton-color" content="#085231">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/icon.png">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="img/icon.png">
        <title>TMI - Plantas</title>
    </head>

    <body>
        <?php
        include("header.html");
        ?>

        <div class="position-relative overflow-hidden p-md-5 text-center bg-light">
            <div class="col-6 mx-auto">
                <img width="40%" src="img/tmi.png" alt="Transformação de Dados Meteorológicos em Informações Úteis para Plantio de Gramíneas" title="Transformação de Dados Meteorológicos em Informações Úteis para Plantio de Gramíneas">
                <p class="lead font-weight-normal">Consulte informações sobre as gramíneas</p>
                <a class="btn btn-outline-success" href="gramineas.php">Ler mais</a>
            </div>
        </div>

        <section class="container text-center mt-3">
            <?php
            include("conexao.php");
            $resultado = $con->query("SELECT * FROM gramineas ORDER BY nome ASC");
            $resultado->execute();
            echo "<form method='post' action='consulta.php'>";
            echo "<label class='p-2'>Gramíneas:</label>";
            echo "<select class='custom-select w-50' name='selecionado' id='selecionado'>";
            echo "<option value='0' name='selecionado' id='selecionado'>Selecione...</option>";
            while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $linha[id_graminea] . "' name='selecionado' id='selecionado'>$linha[nome]</option>";
            }
            echo "</select>";
            echo "<input class='btn btn-outline-success ml-2' type='submit' value='Buscar'/>";
            echo "</form>";
            ?>
        </section>

        <?php
        include("footer.html");
        ?>
    </body>
</html>