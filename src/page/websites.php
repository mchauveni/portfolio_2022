<!DOCTYPE html>
<html lang="en">

<?php
$texts = json_decode(file_get_contents('../src/data/lang/fr.json'));
$websites = json_decode(file_get_contents('../src/data/work_content/websites.json'));
?>

<head>
    <link rel="stylesheet" href="/assets/css/lists.css">
    <title>Websites</title>
    <?php require '../src/parts/head.php'; ?>
</head>

<body>
    <?php require '../src/parts/lists_header.php' ?>
    <main>
        <section id="hero">
            <div class="return-wrapper">
                <a href="/" class="btn">← Retour</a>
            </div>
            <div class="hero-wrapper">
                <p class="almost-main-title">Check my</p>
                <h1 class="main-title">Websites</h1>
            </div>
        </section>
        <section class="list">
            <?php
            foreach ($websites as $element) {
                require '../src/parts/list_item.php';
            }
            ?>
        </section>
    </main>

    <?php require '../src/parts/footer.php' ?>
</body>

</html>