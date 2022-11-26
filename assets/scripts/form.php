<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<p>Vous n'avez AUCUN droit d'être ici :( rentrez chez vous</p>";
}
$message = `Nouveau message de {$_POST['identity']} ({$_POST['email']}) : </br></br> {$_POST['message']}`;

mail('matheo.chaumet.venier@etu.univ-poitiers.com', 'NOUVEAU MESSAGE PORTFOLIO !', json_encode($_POST));
