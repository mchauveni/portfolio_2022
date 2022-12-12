<!DOCTYPE html>
<html lang="en">

<?php
$illustrations = json_decode(file_get_contents('../src/data/work_content/illustrations.json'));

$focus_name = explode('/', $_SERVER['REQUEST_URI'])[count(explode('/', $_SERVER['REQUEST_URI'])) - 1];
$focus = findTheElement($focus_name, $illustrations);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/focus.css">
    <title><?php echo $focus->title ?></title>
    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://mchauveni.matomo.cloud/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = '//cdn.matomo.cloud/mchauveni.matomo.cloud/matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->

</head>

<?php
$texts = json_decode(file_get_contents('../src/data/lang/fr.json'));
?>

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
                    <p class="almost-main-title small">Outils et logiciels</p>
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
                        echo "<img src='/assets/img/works/$focus->class/$img'>";
                    }
                    ?>
                </div>
            </section>
        </section>
    </main>

    <?php require '../src/parts/footer.php' ?>
</body>

</html>