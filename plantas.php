<!doctype html>
<html lang="pt-br">
    <head>
        <meta name="theme-color" content="#085231">
        <meta name="apple-mobile-web-app-status-bar-style" content="#085231">
        <meta name="msapplication-navbutton-color" content="#085231">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/icon.png">
        <title>TMI - Plantações</title>
    </head>

    <body>
        <?php
        include("header.html");
        ?>

        <div class="position-relative overflow-hidden p-md-5 text-center bg-light">
            <div class="col-6 mx-auto">
                <img width="40%" src="img/tmi.png" alt="Transformação de Dados Meteorológicos em Informações para Plantações da Região Nordeste" title="Transformação de Dados Meteorológicos em Informações para Plantações da Região Nordeste">
                <p class="lead font-weight-normal">Transformação de Dados Meteorológicos em Informações para Plantações da Região Nordeste</p>
            </div>
        </div>

        <section class="container text-center mt-3 py-3">
            <?php
            include("conexao.php");
            $resultado = $con->query("SELECT * FROM plantacao ORDER BY nome ASC");
            $resultado->execute();
            echo "<form method='post' action='consulta.php'>";
            echo "<label class='p-2'>Plantação de:</label>";
            echo "<select class='custom-select w-50' name='selecionado' id='selecionado'>";
            echo "<option value='0' name='selecionado' id='selecionado'>Selecione...</option>";
            while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $linha[id_plantacao] . "' name='selecionado' id='selecionado'>$linha[nome]</option>";
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