<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/icon.png">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <title>Carpelo - Contato</title>
    </head>

    <body>

        <header>
            <div>
                <h3>Carpelo</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="login-register.php">Entrar/Regisrar</a></li>
                    <li><a href="empresas.php">Empresas parceiras</a></li>
                    <li><a href="indicadores.php">Indicadores</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <form action="email.php" method="post">
                <fieldset>
                    <legend>Entrar em contato</legend>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required=""><br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required=""><br>
                    <label for="assunto">Assunto:</label>
                    <input type="text" name="assunto" id="assunto" required=""><br>
                    <label for="email">Mensagem:</label>
                    <textarea name="email" id="email" rows="5" cols="40" required=""></textarea><br>
                    <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </section>

        <footer>
        </footer>

        <script src="js/vendor/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/vendor/holder.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"></script>
    </body>
</html>