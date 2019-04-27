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
    <title>TMI - Ajuda</title>
</head>

<body>
    <?php
    include("header.html");
    ?>

    <section class="container mt-3 py-3">
        <h4 class="mb-3 text-center">Entre em contato</h4>
        <form method="post" action="enviarEmail.php">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="assunto">Assunto</label>
                    <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Informe aqui se é Dúvida/Crítica/Sugestão" required="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="exemplo@exemplo.com" required="">
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Dúvida/Crítica/Sugestão</label>
                <textarea rows="10" class="form-control" name="texto" id="texto" placeholder="Email recebidos com ofensas, acusações sem fundamento e sem qualquer contribuição para nosso crescimento e amadurecimento, serão descartados." required=""></textarea>
            </div>
        </div>
    </div>
    <hr class="mb-3">
    <div class="text-center">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>
</section>

<?php
include("footer.html");
?>
</body>
</html>