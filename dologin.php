<?php
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function checkUser($usuario, $senha) {
		$arquivo = fopen("database/usuarios.txt", "r") or die("Não foi possível abrir o arquivo de registros!");

		while(!feof($arquivo)) {
			$line = fgets($arquivo);
			$values = explode(",", $line);

			$values[0] = test_input($values[0]);
			$values[1] = test_input($values[1]);

			if(strcmp($usuario, $values[0]) == 0 && strcmp($senha, $values[1]) == 0) {
				fclose($arquivo);
				return true;
			}
		}

		fclose($arquivo);
		return false;
	}

	function validateFill() {
		if(empty($_POST["usuario"]) || empty($_POST["senha"])) {
			return false;
		}

		return true;
	}

	if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
		if(validateFill()) {
			$usuario = $_POST["usuario"];
			$senha = $_POST["senha"];

			if(checkUser($usuario, $senha)) {
				$_SESSION["logado"] = $usuario;

				header("Location: index.php");
			}
			else {
				header("Location: login.php");
			}
		}
		else {
			header("Location: login.php");
		}
	}
?>
