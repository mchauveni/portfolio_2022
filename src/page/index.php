<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$lang = 'fr'; // default
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['lang'])) {
    if ($_GET['lang'] != 'fr' && $_GET['lang'] != 'en') {
        return header('Location: /home');
    } else {
        $lang = $_GET['lang'];
        $_SESSION['lang'] = $lang;
    }
} else if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}

$texts = json_decode(file_get_contents("../src/data/lang/$lang.json"));
$websites = json_decode(file_get_contents('../src/data/work_content/websites.json'));
$illustrations = json_decode(file_get_contents('../src/data/work_content/illustrations.json'));
?>

<head>
    <link rel="stylesheet" href="/assets/css/index.css">
    <title>Mathéo Chaumet Venier - Portfolio</title>
    <?php require '../src/parts/head.php'; ?>
</head>


<body>
    <?php require '../src/parts/loader.php'; ?>
    <?php require '../src/parts/index_header.php'; ?>
    <main>
        <section id="hero">
            <p class="main-title"><?php echo $texts->index_main_title[0]; ?></p>
            <p class="main-title"><?php echo $texts->index_main_title[1]; ?></p>
            <h1 class=""><?php echo $texts->index_main_subtitle; ?></h1>
        </section>

        <section id="about">
            <h2 class="section_title"><?php echo $texts->index_about_title; ?></h2>
            <div class="section_content">
                <div class="text">
                    <p><?php echo $texts->index_about_text[0]; ?></p>
                    <p><?php echo $texts->index_about_text[1]; ?></p>
                    <p><?php echo $texts->index_about_text[2]; ?></p>
                    <div class="cv_wrapper">
                        <a href="/cv_portfolio.pdf" class="download_cv"><?php echo $texts->index_about_cv->download; ?></a>
                        <button class="copy_cv" data-popup data-popup-color="var(--ok)" data-popup-click data-popup-content="<?php echo $texts->index_about_cv->copylink_popup; ?>"><?php echo $texts->index_about_cv->copylink; ?></button>
                    </div>
                </div>
                <div class="img-wrapper">
                    <img src="./assets/img/hello.svg" alt="" id="hello_img">
                </div>
            </div>
        </section>

        <section id="works">
            <h2 class="section_title"><?php echo $texts->index_work_title; ?></h2>
            <div class="section_content">
                <div class="work-sect">
                    <div class="ws-header">
                        <h3><?php echo $texts->index_work_sect[0]->title; ?></h3>
                        <p><?php echo $texts->index_work_sect[0]->text; ?></p>
                    </div>
                    <div class="preview">
                        <a href="/website/<?php echo $websites[count($websites) - 1]->class ?>" class="bg <?php echo $websites[count($websites) - 1]->class ?>"></a>
                        <a href="/website/<?php echo $websites[count($websites) - 2]->class ?>" class="bg <?php echo $websites[count($websites) - 2]->class ?>"></a>
                        <a href="./websites" class="preview-explore">
                            <p><?php echo $texts->index_work_sect_button; ?></p>
                        </a>
                    </div>
                </div>

                <div class="work-sect">
                    <div class="ws-header">
                        <h3><?php echo $texts->index_work_sect[1]->title; ?></h3>
                        <p><?php echo $texts->index_work_sect[1]->text; ?></p>
                    </div>
                    <div class="preview">
                        <a href="/illustration/<?php echo $illustrations[count($illustrations) - 1]->class ?>" class="bg <?php echo $illustrations[count($illustrations) - 1]->class ?>"></a>
                        <a href="/illustration/<?php echo $illustrations[count($illustrations) - 2]->class ?>" class="bg <?php echo $illustrations[count($illustrations) - 2]->class ?>"></a>
                        <a href="./illustrations" class="preview-explore">
                            <p><?php echo $texts->index_work_sect_button; ?></p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills">
            <h2 class="section_title"><?php echo $texts->index_skills_title; ?></h2>
            <div class="section_content">
                <div class="skill-nav">
                    <ul class="skill-nav-list">
                        <li class="nav-item active"><?php echo $texts->index_skills_view_nav[0]; ?></li>
                        <li class="nav-item"><?php echo $texts->index_skills_view_nav[1]; ?></li>
                        <li class="nav-item"><?php echo $texts->index_skills_view_nav[2]; ?></li>
                        <li class="nav-item"><?php echo $texts->index_skills_view_nav[3]; ?></li>
                        <li class="slider"></li>
                    </ul>
                </div>
                <div class="skill-view">
                    <div class="langages">
                        <h3><?php echo $texts->index_skills_view[0]->title; ?></h3>
                        <div class="sv-content-wrapper">
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/html_css_icon.svg" alt="icon that reminds the HTML and CSS icon" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[0]->index_skills_view_element[0]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[0]->index_skills_view_element[0]->content; ?></p>
                            </div>
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/javascript_icon.svg" alt="the javascript icon" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[0]->index_skills_view_element[1]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[0]->index_skills_view_element[1]->content; ?></p>
                            </div>
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/php_sql_icon.svg" alt="" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[0]->index_skills_view_element[2]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[0]->index_skills_view_element[2]->content; ?></p>
                            </div>
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/java_icon.svg" alt="" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[0]->index_skills_view_element[3]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[0]->index_skills_view_element[3]->content; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="technologies">
                        <h3>Technologies</h3>
                        <div class="sv-content-wrapper">
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/nodejs_icon.svg" alt="" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[1]->index_skills_view_element[0]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[1]->index_skills_view_element[0]->content; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="adobe">
                        <h3>Adobe</h3>
                        <div class="sv-content-wrapper">
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/illustrator_icon.svg" alt="" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[2]->index_skills_view_element[0]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[2]->index_skills_view_element[0]->content; ?></p>
                            </div>
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/photoshop_icon.svg" alt="" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[2]->index_skills_view_element[1]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[2]->index_skills_view_element[1]->content; ?></p>
                            </div>
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/premiere_icon.svg" alt="" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[2]->index_skills_view_element[2]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[2]->index_skills_view_element[2]->content; ?></p>
                            </div>
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/aftereffects_icon.svg" alt="" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[2]->index_skills_view_element[3]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[2]->index_skills_view_element[3]->content; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="microsoft">
                        <h3>Microsoft</h3>
                        <div class="sv-content-wrapper">
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/excel_icon.svg" alt="" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[3]->index_skills_view_element[0]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[3]->index_skills_view_element[0]->content; ?></p>
                            </div>
                            <div class="svc-element">
                                <div class="svc-img-wrapper">
                                    <img src="./assets/img/skill_icons/words_icon.svg" alt="" class="svc-img">
                                </div>
                                <h4 class="svc-title"><?php echo $texts->index_skills_view[3]->index_skills_view_element[1]->title; ?></h4>
                                <p class="svc-text"><?php echo $texts->index_skills_view[3]->index_skills_view_element[1]->content; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="hobbies">
            <h2 class="section_title"><?php echo $texts->index_hobbies_title; ?></h2>
            <div class="section_content">
                <div class="card">
                    <div class="img-wrapper">
                        <img src="./assets/img/hobbies_icons/coding.png" alt="">
                    </div>
                    <h2><?php echo $texts->index_hobbies_cards[0]->title ?></h2>
                    <p><?php echo $texts->index_hobbies_cards[0]->text ?></p>
                </div>

                <div class="card">
                    <div class="img-wrapper">
                        <img src="./assets/img/hobbies_icons/design.png" alt="">
                    </div>
                    <h2><?php echo $texts->index_hobbies_cards[1]->title ?></h2>
                    <p><?php echo $texts->index_hobbies_cards[1]->text ?></p>
                </div>

                <div class="card">
                    <div class="img-wrapper">
                        <img src="./assets/img/hobbies_icons/gaming.png" alt="">
                    </div>
                    <h2><?php echo $texts->index_hobbies_cards[2]->title ?></h2>
                    <p><?php echo $texts->index_hobbies_cards[2]->text ?></p>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2 class="section_title"><?php echo $texts->index_contact_title ?></h2>
            <div class="section_content">
                <form class="contact-form" action="../assets/script.php">
                    <span class="ux-pleaser"><span class="current-question">1</span>/<span class="out-of">?</span></span>
                    <div class="question-wrapper">
                        <div class="form-question">
                            <label><?php echo $texts->index_contact_form_questions[0]->text ?></label>
                            <input type="text" name="identity" placeholder="<?php echo $texts->index_contact_form_questions[0]->placeholder ?>" required>
                            <span class="underline"></span>
                        </div>
                        <div class="form-question">
                            <label><?php echo $texts->index_contact_form_questions[1]->text ?></label>
                            <input type="text" name="email" placeholder="<?php echo $texts->index_contact_form_questions[1]->placeholder ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                            <span class="underline"></span>
                        </div>
                        <div class="form-question">
                            <label><?php echo $texts->index_contact_form_questions[2]->text ?></label>
                            <input type="text" name="message" placeholder="<?php echo $texts->index_contact_form_questions[2]->placeholder ?>" required>
                            <span class="underline"></span>
                        </div>
                        <div class="form-result">
                            <img src="./assets/img/err-circle.svg" class="result-icon" alt="">
                            <p class="result-txt"></p>
                        </div>
                    </div>
                    <div class="button-wrapper">
                        <button class="form-btn-prev">Previous</button>
                        <button class="form-btn-next visible">Next</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php require '../src/parts/footer.php' ?>

    <script src="./assets/js/typewriter.js"></script>
    <script src="./assets/js/hello.js"></script>
    <script src="./assets/js/lava_menu.js"></script>
    <script src="./assets/js/form.js"></script>
    <script src="./assets/js/nav.js"></script>
    <script src="./assets/js/cv.js"></script>
    <script src="./assets/js/popups.js"></script>
</body>

</html>