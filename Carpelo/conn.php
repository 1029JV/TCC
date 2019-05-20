<?php

try {
    $con = new PDO('mysql:host=localhost;dbname=carpelo', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}
?>