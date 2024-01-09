<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $para = "dudusalzer13@gmail.com";
    $assunto = "Nova mensagem do formulário de contato";
    $corpo = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem";

    mail($para, $assunto, $corpo);
}
?>