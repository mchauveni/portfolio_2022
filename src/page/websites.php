<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/lists.css">
    <title>Document</title>
</head>

<?php
$texts = json_decode(file_get_contents('../src/data/en.json'));
?>

<body>
    <?php require '../src/parts/lists_header.php' ?>
    <main>
        <section id="hero">
            <p class="almost-main-title">Check my</p>
            <h1 class="main-title">Websites</h1>
        </section>
        <section class="list">
            <a href="" class="card HOVER">
                <div class="card-header bg greenit">
                </div>
                <p class="card-title">Green IT</p>
            </a>
            <a href="" class="card HOVER">
                <div class="card-header bg greenit">
                </div>
                <p class="card-title">Green IT</p>
            </a>
            <a href="" class="card HOVER">
                <div class="card-header bg greenit">
                </div>
                <p class="card-title">Green IT</p>
            </a>
            <a href="" class="card HOVER">
                <div class="card-header bg greenit">
                </div>
                <p class="card-title">Green IT</p>
            </a>
            <a href="" class="card HOVER">
                <div class="card-header bg greenit">
                </div>
                <p class="card-title">Green IT</p>
            </a>
            <a href="" class="card HOVER">
                <div class="card-header bg greenit">
                </div>
                <p class="card-title">Green IT</p>
            </a>
        </section>
    </main>

    <?php require '../src/parts/footer.php' ?>
    <script src="./assets/ripple.js"></script>
</body>

</html>