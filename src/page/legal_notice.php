<!DOCTYPE html>
<html lang="en">

<?php
$texts = json_decode(file_get_contents('../src/data/lang/fr.json'));
?>

<head>
    <link rel="stylesheet" href="/assets/css/lists.css">
    <title>Mentions légales</title>
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
                <h1 class="main-title">Mentions légales</h1>
            </div>
        </section>
        <section class="content">
            <h2>Vous ici ?</h2>
            <p>Il n'y a rien ici pour le moment...</p>
        </section>
    </main>

    <?php require '../src/parts/footer.php' ?>
</body>

</html>