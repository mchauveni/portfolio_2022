<!DOCTYPE html>
<html lang="en">

<?php
$texts = json_decode(file_get_contents('../src/data/lang/fr.json'));
$websites = json_decode(file_get_contents('../src/data/work_content/websites.json'));

$focus_name = explode('/', $_SERVER['REQUEST_URI'])[count(explode('/', $_SERVER['REQUEST_URI'])) - 1];
$focus = findTheElement($focus_name, $websites);
?>

<head>
    <link rel="stylesheet" href="<?php echo APP_ROOT_URL_COMPLETE ?>/assets/css/focus.css">
    <title><?php echo $focus->title ?></title>
    <?php require '../src/parts/head.php'; ?>
</head>


<body>
    <?php require '../src/parts/lists_header.php' ?>
    <main>
        <section id="hero" class="focus">
            <div class="return-wrapper">
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn">← Retour</a>
            </div>
            <div class="hero-wrapper">
                <h1 class="main-title"><?php echo $focus->title ?></h1>
                <div class="technos-wrapper">
                    <p class="almost-main-title small">Technologies et langages</p>
                    <div class="technos">
                        <?php
                        foreach ($focus->technos as $techno) {
                        ?>
                            <img src="<?php echo APP_ROOT_URL_COMPLETE ?>/assets/img/techno_icons/<?php echo $techno ?>.svg" alt="<?php echo $techno ?>" data-popup data-popup-content="<?php echo strtoupper($techno) ?>" data-popup-color="var(--bg-main)">
                        <?php
                        }
                        ?>
                    </div>
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
                <h2>Galerie</h2>
                <div class="gallery-content">
                    <?php
                    $gallery = array_diff(scandir('./assets/img/works/' . $focus->class), array('.', '..'));
                    foreach ($gallery as $img) {
                        $ctx = str_replace('_', ' ', ucfirst(explode('.', $img)[0]));
                    ?>
                        <img src='<?php echo APP_ROOT_URL_COMPLETE ?>/assets/img/works/$focus->class/$img' alt='$ctx' data-zoom>;
                    <?php
                    }
                    ?>
                </div>
            </section>
        </section>
    </main>

    <?php require '../src/parts/footer.php' ?>
    <script src="<?php echo APP_ROOT_URL_COMPLETE ?>/assets/js/zoom.js"></script>
</body>

</html>