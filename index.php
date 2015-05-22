<?php
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<html>
	<head>
		<?php
			include 'head.php';
			$_SESSION["page_title"] = "Principal";
			include 'title.php';
		 ?>
		<meta charset="UTF-8">
		<script>
			function loadContent(contentDiv) {
				var contentDivs = document.getElementsByClassName('contentDiv');

				if(window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}
				else {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange = function(){
					var contentJSON;
					if((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) {
						contentJSON = JSON.parse(xmlhttp.responseText);

						var contentList = contentJSON.list;

						for(var i = 0; i < contentList.length; i++) {
							var content = contentList[i];
							var actualDiv = document.getElementById(content.id);

							actualDiv.innerHTML = '<h2 class="content-title">' + content.title + '</h2>' +
												  '<div class="initial-content">' + content.initial_content + '</div>' +
												  '<div class="hidden-content"></div>' +
												  '<a class="hidden-content-link" onclick="toggleContent(this.parentNode);"> Ler mais</a>';
						}
					}
				};

				xmlhttp.open('GET','getcontent.php',true);
				xmlhttp.send();
			}

			function toggleContent(contentDiv) {
				var continuationDiv = contentDiv.getElementsByClassName('hidden-content')[0];
				var link = contentDiv.getElementsByClassName('hidden-content-link')[0];

				if(link.innerHTML == " Ler mais") {
					link.innerHTML = " Esconder";

					if(window.XMLHttpRequest) {
						xmlhttp = new XMLHttpRequest();
					}
					else {
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}

					xmlhttp.onreadystatechange = function(){
						if((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) {
							continuationDiv.innerHTML = ' ' + xmlhttp.responseText;
						}
					};

					xmlhttp.open('GET', 'gethiddencontent.php?contentid='+contentDiv.id,true);
					xmlhttp.send();
				}
				else {
					link.innerHTML = " Ler mais";
					continuationDiv.innerHTML = '';
				}

				hidden = !hidden;
			}
		</script>
	</head>

	<body onload="loadContent();">
		<?php include 'header.php' ?>
		<?php include 'menu.php'; ?>

		<div class="content">
			<h1 class="title">Homepage</h1>

			<?php
				if(isset($_SESSION["logado"]) && $_SESSION["logado"] != "") {
					echo "<h2 class=\"subtitle\">Bem vindo, ".$_SESSION["logado"]."!</h2>";
				}
			 ?>

			<div id="content-01" class="content-div"></div>
			<div id="content-02" class="content-div"></div>
			<div id="content-03" class="content-div"></div>

			</br>

		</div>

		<?php include 'footer.php' ?>
	</body>
</html>
