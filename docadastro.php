<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = test_input($_POST["usuario"]);
    $senha = test_input($_POST["senha"]);
    $confirmacao_senha = test_input($_POST["confirmacao_senha"]);
    $nome = test_input($_POST["nome"]);
    $cpf = test_input($_POST["cpf"]);
    $data_nascimento = test_input($_POST["data_nascimento"]);
    $sexo = test_input($_POST["sexo"]);
    $email = test_input($_POST["email"]);

    if(isset($_POST["cep"])) {
        $cep = test_input($_POST[""]);
    }
    else {
        $cep = "";
    }

    if(isset($_POST["numero"])) {
        $numero = test_input($_POST["numero"]);
    }
    else {
        $numero = "";
    }

    if(isset($_POST["bairro"])) {
        $bairro = test_input($_POST["bairro"]);
    }
    else {
        $bairro = "";
    }

    if(isset($_POST["cidade"])) {
        $cidade = test_input($_POST["cidade"]);
    }
    else {
        $cidade = "";
    }

    if(isset($_POST["estado"])) {
        $estado = test_input($_POST["estado"]);
    }
    else {
        $estado = "";
    }

    if(isset($_POST["telefone"])) {
        $telefone = test_input($_POST["telefone"]);
    }
    else {
        $telefone = "";
    }

    $arquivo = fopen("database/usuarios.txt", "a") or die("Não foi possível abrir o arquivo de registros!");
    fwrite($arquivo, "\n");

    $line = $usuario.",". $senha.",". $nome.",". $cpf.",". $data_nascimento.",". $sexo.",". $email.",". $cep.",". $rua.",". $numero.",". $bairro.",". $cidade.",". $estado.",". $telefone;
    fwrite($arquivo, $line);

    header("location:login.php");
?>
