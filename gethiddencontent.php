<?php
    $file = 'database/content.json';
    $json = json_decode(file_get_contents($file), true);

    $resultJSON = array();

    $contentId = $_GET["contentid"];

    foreach ($json["list"] as $key => $value) {
        if($value["id"] == $contentId) {
            echo $value["hidden_content"];
        }
    }
 ?>