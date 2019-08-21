<!doctype html>
<html lang="pt-br">
    <head>
        <meta name="theme-color" content="#085231">
        <meta name="apple-mobile-web-app-status-bar-style" content="#085231">
        <meta name="msapplication-navbutton-color" content="#085231">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/icon.png">
        <title>TMI - Página Inicial</title>
    </head>

    <body>
        <?php
        include("header.html");
        ?>

        <div class="position-relative overflow-hidden p-md-5 text-center bg-light">
            <div class="col-6 mx-auto">
                <img width="40%" src="img/tmi.png" alt="Transformação de Dados Meteorológicos em Informações para Plantações da Região Nordeste" title="Transformação de Dados Meteorológicos em Informações para Plantações da Região Nordeste">
                <p class="lead font-weight-normal">Transformação de Dados Meteorológicos em Informações para Plantações da Região Nordeste</p>
                <a class="btn btn-outline-success" href="sobre.php">Ler mais</a>
            </div>
        </div>

        <section class="album bg-light mt-3 py-3">
            <div class="container">
                <div class="row">
                    <?php
                    include("conexao.php");
                    $resultado = $con->query("SELECT id_plantacao, nome, descricao, foto FROM plantacao ORDER BY nome ASC LIMIT 6");
                    $resultado->execute();
                    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        $str = $linha['descricao'];
                        $newStr = "";
                        for ($i = 0; $i < 153; $i++) {
                            $newStr .= $str[$i];
                        }
                        ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="miniatura card-img-top" title='<?php echo "$linha[nome]"; ?>' alt='<?php echo "$linha[nome]"; ?>' src='img/<?php echo "$linha[foto]"; ?>'>
                                <h4 class="d-inline-block text-center mt-2 mb-0"><?php echo "$linha[nome]"; ?></h4>
                                <div class="card-body">
                                    <p class="card-text text-justify"><?php echo $newStr; ?>... 
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group text-center m-auto">
                                            <form method="post" action="consulta.php"><input type="hidden" name="selecionado" id="selecionado" value='<?php echo "$linha[id_plantacao]"; ?>'> <input class="btn btn-outline-success" type="submit" value="Ler mais"/></form></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>  
                </div>         
        </section>

        <?php
        include("footer.html");
        ?>
    </body>
</html>