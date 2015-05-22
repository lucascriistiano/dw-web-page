<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $nome = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $mensagem = test_input($_POST["mensagem"]);

    $arquivo = fopen("database/mensagens.txt", "a") or die("Não foi possível abrir o arquivo de mensagens!");
    fwrite($arquivo, "\n");

    $line = $nome.",". $email.",". $mensagem;
    fwrite($arquivo, $line);

    header("location:index.php");
?>
