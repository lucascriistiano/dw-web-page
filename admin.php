<?php include 'verificar_autenticacao.php'; ?>

<html>
	<head>
		<?php
			include 'head.php';
			$_SESSION["page_title"] = "Área do Administrador";
			include 'title.php';
		 ?>
		<meta charset="UTF-8">
	</head>

	<body>
		<?php include 'header.php' ?>
		<?php include 'menu.php'; ?>

		<div class="content">
			<h1 class="title">Administrador</h1>

			<h2 class="subtitle">Lista de Usuários</h2>

			<?php
				function getUsuarios() {
					$listaDeUsuarios = array();
					$arquivo = fopen("database/usuarios.txt", "r") or die("Não foi possível abrir o arquivo de registros!");

					while(!feof($arquivo)) {
						$line = fgets($arquivo);
						$values = explode(",", $line);

						$usuario = array();
						$usuario["usuario"] = test_input($values[0]);
						$usuario["senha"] = test_input($values[1]);

						array_push($listaDeUsuarios, $usuario);
					}
					fclose($arquivo);

					return $listaDeUsuarios;
				}

				function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
			?>

			<table>
				<tr>
					<th>Usuário</th>
					<th>Senha</th>
				</tr>

				<?php
					$listaDeUsuarios = getUsuarios();

					foreach ($listaDeUsuarios as $usuario) {
						echo "<tr><td>".$usuario["usuario"]. "</td><td>".$usuario["senha"]."</td></tr>";
					}
				?>

			</table>
		</div>

		<?php include 'footer.php' ?>
	</body>
</html>
