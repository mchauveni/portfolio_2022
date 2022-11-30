<?php
/* IF IT OCCURS THAT PEOPLE COME HERE */
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<p>Vous n'avez AUCUN droit d'être ici :( rentrez chez vous</p>";
}
$err = false;
/* TESTS */
foreach ($_POST as $inputs) {
    if (trim($inputs) === '') {
        $err = true;
    }
}

if (preg_match('/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}/', $_POST['email']) != 1) {
    $err = true;
}

header('Content-Type: application/json');
if ($err) {
    echo json_encode([
        'status' => false,
    ]);
} else {
    echo json_encode([
        'status' => true,
    ]);

    $subject = `Message Portfolio : {$_POST['identity']}`;
    $message = `Nouveau message de {$_POST['identity']} ({$_POST['email']}) : </br></br> {$_POST['message']}`;
    mail('matheo.chaumet.venier@etu.univ-poitiers.com', $subject, $message);
}
