<style>
    header {
        width: 100%;
        height: 7rem;
        z-index: 1000000;
        position: fixed;
        background-color: var(--bg-main-opacity);
        backdrop-filter: blur(3px);
    }

    .header-wrapper {
        max-width: 1300px;
        height: 100%;
        margin: auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    header .logo-container {
        height: 5rem;
        width: 5rem;
    }

    #logo-link::after {
        display: none;
    }

    #logo-link {
        padding: 0;
    }

    header .logo_container img {
        width: 100%;
        height: 100%;
    }

    header nav {
        height: 100%;
    }

    header nav ul {
        height: 100%;
        list-style: none;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 1.5rem;
        font-size: 1.1rem;
    }

    header li,
    header a {
        display: block;
        text-decoration: none;
    }

    header li {
        height: 100%;
        display: flex;
        align-items: center;
    }

    header a {
        padding: 2rem 0.5rem;
        position: relative;
    }

    .lang_toggler_wrapper a {
        padding: 1rem;
        width: min-content;
    }

    .lang_toggler {
        display: flex;
        align-items: center;
        transform-origin: center;
        transform: translateY(-50%) rotate(-90deg);
    }

    @media screen and (min-width: 992px) {

        header a:after {
            content: "";
            width: 100%;
            height: 2px;
            bottom: 35%;
            left: 0;
            display: block;
            position: absolute;
            transform-origin: center;
            transform: scale(0, 1);
            background: var(--txt-secondary);
            transition: 300ms;
        }

        header a:hover:after {
            transform: scale(1);
        }

        .lang_toggler_wrapper {
            position: fixed;
            top: 70vh;
            left: 3rem;

        }

        .lang_toggler_wrapper a:after {
            bottom: 0.75rem;
            left: 1rem;
            width: calc(100% - 2rem);
        }

        .lang_toggler_wrapper::after {
            content: "";
            position: absolute;
            bottom: -100vh;
            left: 50%;
            width: 2px;
            height: 100vh;
            background-color: var(--txt-secondary);
        }

    }

    @media screen and (max-width: 576px) {
        header .logo-container {
            margin: 1rem;
            padding: 1rem;
        }

        header nav ul {
            display: none;
        }
    }
</style>

<header>
    <div class="header-wrapper">
        <div class="logo-container">
            <a href="/" id="logo-link" aria-label="home">
                <img src="./assets/img/logo.svg" alt="">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="#about"><?php echo $texts->index_navbar[0]; ?></a></li>
                <li><a href="#works"><?php echo $texts->index_navbar[1]; ?></a></li>
                <li><a href="#skills"><?php echo $texts->index_navbar[2]; ?></a></li>
                <li><a href="#hobbies"><?php echo $texts->index_navbar[3]; ?></a></li>
                <li><a href="#contact"><?php echo $texts->index_navbar[4]; ?></a></li>
            </ul>
        </nav>
        <div class="lang_toggler_wrapper">
            <div class="lang_toggler">
                <a href="/home?lang=en">EN</a>
                <span> / </span>
                <a href="/home?lang=fr">FR</a>
            </div>
        </div>
    </div>
</header>