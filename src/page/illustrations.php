<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/lists.css">
    <title>Illustrations</title>
</head>

<?php
$texts = json_decode(file_get_contents('../src/data/lang/en.json'));
$illustrations = json_decode(file_get_contents('../src/data/work_content/illustrations.json'));
?>

<body>
    <?php require '../src/parts/lists_header.php' ?>
    <main>
        <section id="hero">
            <p class="almost-main-title">Check my</p>
            <h1 class="main-title">Illustrations</h1>
        </section>
        <section class="list">
            <?php
            foreach ($illustrations as $element) {
                require '../src/parts/list_item.php';
            }

            ?>

        </section>
    </main>

    <?php require '../src/parts/footer.php' ?>
</body>

</html>