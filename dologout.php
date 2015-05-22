<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

	$_SESSION["logado"] = "";
	header("location:index.php");
?>
