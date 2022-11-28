<?php
/* IF IT OCCURS THAT PEOPLE COME HERE */
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<p>Vous n'avez AUCUN droit d'être ici :( rentrez chez vous</p>";
}

/* TESTS */
foreach ($_POST as $inputs) {
    if (trim($inputs) === '') {
        $err = true;
    }
}

if (preg_match('[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$', $_POST['email']) != 1) {
    $err = true;
}

header('Content-Type: application/json');
if ($err) {
} else {
    echo json_encode([
        'status' => true,
    ]);

    $message = `Nouveau message de {$_POST['identity']} ({$_POST['email']}) : </br></br> {$_POST['message']}`;
    mail('matheo.chaumet.venier@etu.univ-poitiers.com', 'NOUVEAU MESSAGE PORTFOLIO !', json_encode($_POST));
}

echo json_encode([
    'status' => false,
]);
