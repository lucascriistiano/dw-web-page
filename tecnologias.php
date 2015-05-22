<?php include 'verificar_autenticacao.php'; ?>

<html>
	<head>
		<?php 
			include 'head.php';
			$_SESSION["page_title"] = "Tecnologias";
			include 'title.php';
		 ?>
		<meta charset="UTF-8">
	</head>

	<body>
		<?php include 'header.php' ?>
		<?php include 'menu.php'; ?>

		<div class="content">
			<h1 class="title">Tecnologias</h1>
			<p>Nessa seção você pode encontrar a descrição das principais tecnologias utilizadas para o desenvolvimento de páginas web:</p>

			<ul>
				<li><a href="#linguagens">Linguagens</a></li>
				<ul>
					<li><a href="#html">HTML</a></li>
					<li><a href="#javascript">Javascript</a></li>
					<li><a href="#css">CSS</a></li>
				</ul>

				<li><a href="#ferramentas">Ferramentas</a></li>
				<ul>
					<li><a href="#frameworks">Frameworks</a></li>
					<li><a href="#prototipacao">Prototipação</a></li>
					<li><a href="#gerencia-de-conteudo">Gerência de conteúdo</a></li>
				</ul>
			</ul>

			<h2 class="subtitle"><a name="linguagens">Linguagens</a></h2>

			<img src="img/html-css-javascript.png" />

			<h3><a name="html">HTML</a></h3>
			<h4>Definição</h4>
			<p>HTML (abreviação para a expressão inglesa HyperText Markup Language, que significa Linguagem de Marcação de Hipertexto) é uma linguagem de marcação utilizada para produzir páginas na Web. Documentos HTML podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime e SGML.</p>
			<p>HyTime é um padrão para a representação estruturada de hipermídia e conteúdo baseado em tempo. Um documento é visto como um conjunto de eventos concorrentes dependentes de tempo (como áudio, vídeo, etc.), conectados por hiperligações. O padrão é independente de outros padrões de processamento de texto em geral.</p>
			<p>SGML é um padrão de formatação de textos. Não foi desenvolvido para hipertexto, mas tornou-se conveniente para transformar documentos em hiper-objetos e para descrever as ligações.</p>

			<h4>História</h4>
			<p>Tim Berners-Lee (físico britânico) criou o HTML original (e outros protocolos associados como o HTTP) em uma estação NeXTcube usando o ambiente de desenvolvimento NeXTSTEP. Na época a linguagem não era uma especificação, mas uma coleção de ferramentas para resolver um problema de Tim: a comunicação e disseminação das pesquisas entre ele e seu grupo de colegas. Sua solução, combinada com a então emergente internet pública (que tornar-se-ia a Internet) ganhou atenção mundial. As primeiras versões do HTML foram definidas com regras sintáticas flexíveis, o que ajudou aqueles sem familiaridade com a publicação na Web. Através do tempo, a utilização de ferramentas para autoria de HTML aumentou, assim como a tendência em tornar a sintaxe cada vez mais rígida. Apesar disso, por questões históricas (retrocompatibilidade), os navegadores ainda hoje conseguem interpretar páginas web que estão longe de ser um código HTML válido.</p>

			<p>A linguagem foi definida em especificações formais na década de 1990, inspiradas nas propostas originais de Tim Berners-Lee em criar uma linguagem baseada em SGML para a Internet. A primeira publicação foi esboçada por Berners-Lee e Dan Connolly, e publicada em 1993 na IETF como uma aplicação formal para o SGML (com uma DTD em SGML definindo a gramática). A IETF criou um grupo de trabalho para o HTML no ano seguinte, e publicou o HTML 2.0 em 1995. Desde 1996, as especificações HTML vêm sendo mantidas, com o auxílio de fabricantes de software, pela World Wide Web Consortium (W3C).1 Apesar disso, em 2000 a linguagem tornou-se também uma norma internacional (ISO/IEC 15445:2000). A última especificação HTML lançada pela W3C foi a recomendação HTML 4.01, publicada no final de 1999. Uma errata ainda foi lançada em 2001.</p>

			<p>Desde a publicação do HTML 3.5 no final de 1997, o grupo de trabalho da W3C tem cada vez mais — e de 2002 a 2006, de forma exclusiva — focado no desenvolvimento do XHTML, uma especificação HTML baseada em XML que é considerada pela W3C como um sucessor do HTML.2 3 4 O XHTML faz uso de uma sintaxe mais rigorosa e menos ambígua para tornar o HTML mais simples de ser processado e estendido.</p>

			<p>Em janeiro de 2008 a W3C publicou a especificação do HTML5, a próxima versão do HTML, como Working Draft. Apesar de sua sintaxe ser semelhante a de SGML, o HTML5 abandonou qualquer tentativa de ser uma aplicação SGML e, definiu explicitamente sua própria serialização "html", além de uma alternativa baseada em XML, o XHTML5.5</p>

			<p>A lista de versões já publicadas do HTML são:</p>
			<table>
				<tr>
					<th>Versão</th>
					<th>Ano</th>
				</tr>
				<tr>
					<td>HTML 2.0</td>
					<td>1995</td>
				</tr>
				<tr>
					<td>HTML 3.2</td>
					<td>1997</td>
				</tr>
				<tr>
					<td>HTML 4.0</td>
					<td>1998</td>
				</tr>
				<tr>
					<td>HTML 4.01</td>
					<td>1999</td>
				</tr>
				<tr>
					<td>HTML5</td>
					<td>2014</td>
				</tr>
			</table>

			<p><strong>Origem: Wikipédia, a enciclopédia livre.</strong></p>

			<h3><a name="javascript">Javascript</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h3><a name="css">CSS</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h2 class="subtitle"><a name="ferramentas">Ferramentas</a></h2>
			<h3><a name="frameworks">Frameworks</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h3><a name="prototipacao">Prototipação</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h3><a name="gerencia-de-conteudo">Gerência de Conteúdo</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	
		<?php include 'footer.php' ?>
	</body>	
</html>
