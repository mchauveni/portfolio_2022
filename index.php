<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Chaosbeing - Portfolio</title>
</head>

<?php
$texts = json_decode(file_get_contents('./assets/lang/en.json'));
?>

<body>
    <header>
        <div class="logo_container">
            <img src="./TOREMOVEFROMPROD/some_sort_of_logo.png" alt="">
        </div>
        <nav>
            <ul>
                <li><?php echo $texts->about_title; ?></li>
                <li><?php echo $texts->hobbies_title; ?></li>
                <li><?php echo $texts->about_title; ?></li>
                <li><?php echo $texts->about_title; ?></li>
                <li><?php echo $texts->about_title; ?></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="hero">
            <h1><?php echo $texts->main_title[0]; ?></h1>
            <h1><?php echo $texts->main_title[1]; ?></h1>
            <p class="bt"><?php echo $texts->main_subtitle; ?></p>
        </section>

        <section id="about">
            <h2 class="section_title"><?php echo $texts->about_title; ?></h2>
            <div class="section_content">
                <div class="text">
                    <p><?php echo $texts->about_text[0]; ?></p>
                    <p><?php echo $texts->about_text[1]; ?></p>
                    <p><?php echo $texts->about_text[2]; ?></p>
                </div>
                <div class="img-wrapper">
                    <img src="./assets/img/hello.svg" alt="" id="hello_img">
                </div>
            </div>
        </section>

        <section id="works">
            <h2 class="section_title"><?php echo $texts->work_title; ?></h2>
            <div class="section_content">
                <div class="work-sect">
                    <div class="ws-header">
                        <div class="ws-content">
                            <h3><?php echo $texts->work_sect[0]->title; ?></h3>
                            <p><?php echo $texts->work_sect[0]->text; ?></p>
                        </div>
                        <div class="ws-icon"></div>
                    </div>
                    <div class="preview">
                        <a href=""></a>
                        <a href=""></a>
                        <a href="" class="preview-explore">
                            <p><?php echo $texts->work_sect_button; ?></p>
                        </a>
                    </div>
                </div>

                <div class="work-sect">
                    <div class="ws-header">
                        <div class="ws-content">
                            <h3><?php echo $texts->work_sect[1]->title; ?></h3>
                            <p><?php echo $texts->work_sect[1]->text; ?></p>
                        </div>
                        <div class="ws-icon"></div>
                    </div>
                    <div class="preview">
                        <a href=""></a>
                        <a href=""></a>
                        <a href="" class="preview-explore">
                            <p><?php echo $texts->work_sect_button; ?></p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills">
            <h2 class="section_title">Skillzzz</h2>
            <div class="section_content">
                <div class="skill-nav">
                    <ul class="skill-nav-list">
                        <li class="nav-item active">Langages</li>
                        <li class="nav-item">Technologies</li>
                        <li class="nav-item">Adobe</li>
                        <li class="nav-item">Microsoft</li>
                        <li class="slider"></li>
                    </ul>
                </div>
                <div class="skill-view">
                    <div class="langages">
                        <h3>Langages</h3>
                        <div class="sv-content-wrapper">
                            <div class="svc-element">
                                <img src="./assets/img/html_css_logo.svg" alt="icon that reminds the HTML and CSS icon" class="svc-img">
                                <h4 class="svc-title">HTML / CSS</h4>
                                <p class="svc-text">I used these throughout a lot of project, without any framework, templates or preprocessor of any kind. Pure plain old HTML and CSS.</p>
                            </div>
                            <div class="svc-element">
                                <img src="./assets/img/javascript_logo.svg"" alt=" the javascript icon" class="svc-img">
                                <h4 class="svc-title">Javascript</h4>
                                <p class="svc-text">My favorite language overall, JS is a thing I like to work with. Everything done on this site is hand-made with pure vanilla JS.</p>
                            </div>
                            <div class="svc-element">
                                <img src="" alt="" class="svc-img">
                                <h4 class="svc-title">PHP / SQL</h4>
                                <p class="svc-text"></p>
                            </div>
                            <div class="svc-element">
                                <img src="" alt="" class="svc-img">
                                <h4 class="svc-title">Java</h4>
                                <p class="svc-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="technologies">
                        <h3>Technologies</h3>
                    </div>
                    <div class="adobe">
                        <h3>Adobe</h3>
                    </div>
                    <div class="microsoft">
                        <h3>Microsoft</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="hobbies">
            <h2 class="section_title"><?php echo $texts->hobbies_title; ?></h2>
            <div class="section_content">
                <div class="card">
                    <div class="img-wrapper">
                        <img src="./assets/img/coding.png" alt="">
                    </div>
                    <h2><?php echo $texts->hobbies_cards[0]->title ?></h2>
                    <p><?php echo $texts->hobbies_cards[0]->text ?></p>
                </div>

                <div class="card">
                    <div class="img-wrapper">
                        <img src="./assets/img/design.png" alt="">
                    </div>
                    <h2><?php echo $texts->hobbies_cards[1]->title ?></h2>
                    <p><?php echo $texts->hobbies_cards[1]->text ?></p>
                </div>

                <div class="card">
                    <div class="img-wrapper">
                        <img src="./assets/img/gaming.png" alt="">
                    </div>
                    <h2><?php echo $texts->hobbies_cards[2]->title ?></h2>
                    <p><?php echo $texts->hobbies_cards[2]->text ?></p>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2 class="section_title">Contact me</h2>
            <div class="section_content">
                <form class="contact-form" action="./assets/scripts/form.php">
                    <div class="question-wrapper">
                        <div class="form-question" index="0">
                            <label for="identity">Who are you ?</label>
                            <input type="text" name="identity" placeholder="Mohamed Lee" required>
                            <span class="underline"></span>
                        </div>
                        <div class="form-question" index="1">
                            <label for="identity">What's your email adress ?</label>
                            <input type="text" name="email" placeholder="contact@entreprise.com" required>
                            <span class="underline"></span>
                        </div>
                        <div class="form-question" index="2">
                            <label for="identity">What do you want to tell me ?</label>
                            <input type="text" name="message" placeholder="Hey ! I like the background color !" required>
                            <span class="underline"></span>
                        </div>
                    </div>
                    <div class="button-wrapper">
                        <button class="form-btn-prev">Previous</button>
                        <button class="form-btn-next">Next</button>
                    </div>
                </form>
                <div class="form-validation">

                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-links">
            <h3>Links</h3>
            <ul>
                <li><a href="">Website list</a></li>
                <li><a href="">Illustration list</a></li>
            </ul>
        </div>
        <div class="footer-socials">
            <h3>Socials</h3>
            <ul>
                <li><a href="">Github</a></li>
                <li><a href="">LinkedIn</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Discord</a></li>
            </ul>
        </div>
        <div class="footer-legal">
            <h3>Legal Shit</h3>
            <ul>
                <li><a href="">Term of Use</a></li>
                <li><a href="">Legal mentions</a></li>
            </ul>
        </div>
    </footer>

    <script src="./assets/js/typewriter.js"></script>
    <script src="./assets/js/hello.js"></script>
    <script src="./assets/js/vanilla-tilt.js"></script>
    <script src="./assets/js/lava_menu.js"></script>
    <script src="./assets/js/form.js"></script>
</body>

</html>