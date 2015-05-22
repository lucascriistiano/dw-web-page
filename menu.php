<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_SESSION['logado']) && $_SESSION['logado'] != "") {
        echo '<div id="menu">';
        echo '<ul>
            <li><a href="index.php">Homepage</a></li>
            <li><a href="aulas.php">Aulas</a></li>
            <li><a href="quem_sou.php">Quem sou</a></li>
            <li><a href="nossos_servicos.php">Nossos Serviços</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="admin.php">Área do Administrador</a></li>
            <li><a href="dologout.php">Sair</a></li>
        </ul>';
        echo '</div>';
    }
    else {
        echo '<div id="menu">';
        echo '<ul>
            <li><a href="index.php">Homepage</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="aulas.php">Aulas</a></li>
            <li><a href="quem_sou.php">Quem sou</a></li>
            <li><a href="nossos_servicos.php">Nossos Serviços</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="admin.php">Área do Administrador</a></li>
        </ul>';
        echo '</div>';
    }
?>
