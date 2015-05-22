<?php
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

	echo "<title>".$_SESSION["page_title"]." - Aprendendo Desenvolvimento WEB</title>";
 ?>
