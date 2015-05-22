<?php
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<html>
	<head>
		<?php
			include 'head.php';
			$_SESSION["page_title"] = "Quem sou";
			include 'title.php';
		 ?>
		<meta charset="UTF-8">
	</head>

	<body>
		<?php include 'header.php' ?>
		<?php include 'menu.php'; ?>

		<div class="content">
			<h1 class="title">Quem sou</h1>

			<p>
				<img id="foto_perfil" src="img/eu.png" />

				Sou <strong>Lucas Cristiano Calixto Dantas</strong>, tenho 19 anos e sou natural de Natal-RN. Técnico de Informática pelo <em>Instituto Federal de Educação Ciência e Tecnologia do Rio Grande do Norte (IFRN)</em>, atualmente sou graduando do curso de Bacharelado em Tecnologia da Informação (BTI), com ênfase em Engenharia de Software, na <em>Universidade Federal do Rio Grande do Norte (UFRN)</em>.</br></br>
				O meu interesse pela informática surgiu desde cedo, quando, devido ao contato, primeiramente, com videogames, senti-me atraído pelo “mundo digital”. Esse interesse foi intensificado devido ao contato com o computador e confirmado como aspiração profissional no decorrer do curso técnico no IFRN.</br></br>
				Pretendo ingressar no mercado de trabalho na área de desenvolvimento de software ou investir na pós-graduação para seguir carreira docente. Não tenho, até agora, experiências profissionais. Atividades destinadas ao desenvolvimento e pesquisa voltada a softwares são as que mais me atraem.
			</p>
		</div>

		<?php include 'footer.php' ?>
	</body>
</html>
