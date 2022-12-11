<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/focus.css">
    <title>Document</title>
</head>

<?php
$websites = json_decode(file_get_contents('../src/data/work_content/websites.json'));

$focus_name = explode('/', $_SERVER['REQUEST_URI'])[count(explode('/', $_SERVER['REQUEST_URI'])) - 1];
$focus = findTheElement($focus_name, $websites);
?>

<body>
    <?php require '../src/parts/lists_header.php' ?>
    <main>
        <section id="hero" class="focus">
            <h1 class="main-title"><?php echo $focus->title ?></h1>
            <div class="technos-wrapper">
                <p class="almost-main-title small">Technologies et langages</p>
                <div class="technos">
                    <?php
                    foreach ($focus->technos as $techno) {
                    ?>
                        <img src="/assets/img/techno_icons/<?php echo $techno ?>.svg" alt="">
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="content">
            <section class="about">
                <h2>À propos</h2>
                <?php
                foreach ($focus->description as $desc_part) {
                    echo "<p>$desc_part</p>";
                }
                ?>
            </section>
            <section class="gallery">
                <h2>Gallerie</h2>
                <div class="gallery-content">
                    <?php
                    $gallery = array_diff(scandir('./assets/img/websites_screenshot/' . $focus->class), array('.', '..'));
                    foreach ($gallery as $img) {
                        echo "<img src='/assets/img/websites_screenshot/$focus->class/$img'>";
                    }
                    ?>
                </div>
            </section>
        </section>
    </main>

    <?php require '../src/parts/footer.php' ?>
</body>

</html>