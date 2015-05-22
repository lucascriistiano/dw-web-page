<?php
    $file = 'database/content.json';

    header('Content-Type: application/json');
    echo file_get_contents($file);
 ?>