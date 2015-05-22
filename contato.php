<?php session_start(); ?>

<html>
	<head>
		<?php
			include 'head.php';
			$_SESSION["page_title"] = "Contato";
			include 'title.php';
		 ?>
		<meta charset="UTF-8">
		<script type="text/javascript" src="js/form_validation.js"></script>
	</head>

	<body>
		<?php include 'header.php' ?>
		<?php include 'menu.php'; ?>

		<div class="content">
			<h1 class="title">Contato</h1>

			<div id="error_list"></div>

			<form action="docontato.php" method="POST" onsubmit="return validateFormContato();">
				<label>
					Nome:</br>
					<input type="text" id="nome" class="textinput" name="nome" />
					<span class="error" id="error_nome"></span>
				</label>

				<label>
					E-mail:</br>
					<input type="email" id="email" class="textinput" name="email" />
					<span class="error" id="error_email"></span>
				</label>

				<label>
					Mensagem:</br>
					<span class="error" id="error_mensagem"></span></br>
					<textarea class="textinput" id="mensagem" rows="4" cols="50" name="mensagem" placeholder="Digite aqui a sua mensagem e fale conosco!"></textarea>
				</label>

				<input class="button" type="submit" />
			</form>
		</div>

		<?php include 'footer.php' ?>
	</body>
</html>
