<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

	if(!isset($_SESSION["logado"]) || strcmp($_SESSION["logado"],"") == 0) {
		header("Location: login.php");
		exit;
	}
?>
