<?php

    $suffix_url = "";

    if(isset($_GET['en'])) {
        $textes = json_decode(file_get_contents("textes/en.json"), true);
        $suffix_url = "?en";
    } else {
        $textes = json_decode(file_get_contents("textes/fr.json"), true);
    }

?>