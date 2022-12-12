<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/lists.css">
    <title>Conditions Générale d'Utilisation</title>
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
        <section id="hero">
            <div class="return-wrapper">
                <a href="/" class="btn">← Retour</a>
            </div>
            <div class="hero-wrapper">
                <h1 class="main-title">CGUs</h1>
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