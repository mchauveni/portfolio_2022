<?php

$bad_array = ["ಠ_ಠ", "( ﾟДﾟ)", "⊙﹏⊙", "( ಠ ʖ̯ ಠ)", "(ง'̀-'́)ง", "(╯°□°）╯︵ ┻━┻"];
$good_array = ["( ˇ෴ˇ )", "ヽ(´▽`)/", "♪♪ ヽ(ˇ∀ˇ )ゞ", "(•̀ᴗ•́)و ̑̑"];

/* IF IT OCCURS THAT PEOPLE COME HERE */
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<p>Vous n'avez AUCUN droit d'être ici :( rentrez chez vous</p>";
}

$err = false;
/* TESTS */
foreach ($_POST as $inputs) {
    if (trim($inputs) === '') {
        $err = "Un champs est vide :l";
    }
}

if (preg_match('/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}/', $_POST['email']) != 1) {
    $err = "L'adresse email semble invalide ";
}

header('Content-Type: application/json');

if ($err) {

    echo json_encode([
        'status' => false,
        'err' => $err,
        'emoji' => $bad_array[random_int(0, count($bad_array) - 1)]
    ]);
} else {
    echo json_encode([
        'status' => true,
        'err' => $err,
        'emoji' => $good_array[random_int(0, count($good_array) - 1)]
    ]);

    /*     $subject = `Message Portfolio : {$_POST['identity']}`;
    $message = `Nouveau message de {$_POST['identity']} ({$_POST['email']}) : </br></br> {$_POST['message']}`;
    mail('matheo.chaumet.venier@etu.univ-poitiers.com', $subject, $message); */
}
