<?php
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<html>
	<head>
		<?php
			include 'head.php';
			$_SESSION["page_title"] = "Login";
			include 'title.php';
		 ?>
		<meta charset="UTF-8">
		<script type="text/javascript" src="js/form_validation.js"></script>
	</head>

	<body>
		<?php include 'header.php' ?>
		<?php include 'menu.php'; ?>

		<div class="content">
			<h1 class="title">Login</h1>

			<div id="error_list"></div>

			<form action="dologin.php" method="POST" onsubmit="return validateFormLogin();">
				<label>
					Usuário:
					<input class="textinput" id="usuario" type="text" name="usuario" />
					<span class="field_obs" id="error_usuario"></span>
				</label>

				<label>
					Senha:
					<input class="textinput" id="senha" type="password" name="senha" />
					<span class="field_obs" id="error_senha"></span>
				</label>

				<input class="button" type="submit" value="Entrar" />
				<a href="cadastro.php">Cadastrar-se</a>
			</form>
		</div>

		<?php include 'footer.php' ?>
	</body>
</html>
