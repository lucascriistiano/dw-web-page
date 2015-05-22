<?php include 'verificar_autenticacao.php'; ?>

<html>
	<head>
		<?php 
			include 'head.php';
			$_SESSION["page_title"] = "Aulas";
			include 'title.php';
		 ?>
		<meta charset="UTF-8">
	</head>

	<body>
		<?php include 'header.php' ?>
		<?php include 'menu.php'; ?>

		<div class="content">
			<h1 class="title">Aulas</h1>

			<h2 class="subtitle">Módulo 01</h2>
			<ol>
	            <li><a href="o_que_e_web.php">O que é web?</a></li>
	            <li><a href="tecnologias.php">Tecnologias</a></li>
	            <li><a href="metodos.php">Métodos</a></li>
	        </ol>
	    </div>
	
		<?php include 'footer.php' ?>
	</body>
</html>
