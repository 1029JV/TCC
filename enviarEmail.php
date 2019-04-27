<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$from = $_POST["email"];
$to = "joao_vitor1029@outlook.com";
$subject = $_POST["assunto"];
$message = $_POST["texto"];
$nome = $_POST["nome"];
$headers = "De:". $nome;

mail($to, $subject, $message, $headers);

echo "A mensagem de e-mail foi enviada.";

?>