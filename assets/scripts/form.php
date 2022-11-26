<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<p>Vous n'avez AUCUN droit d'être ici :( rentrez chez vous</p>";
}

var_dump($_POST, json_encode($_POST));
file_put_contents("./test.txt", json_encode($_POST), FILE_APPEND);
mail('matheo.chaumet.venier@gmail.com', 'NOUVEAU MESSAGE PORTFOLIO !', json_encode($_POST));
