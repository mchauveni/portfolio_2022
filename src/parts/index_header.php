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
        gap: 3rem;
        font-size: 1.rem;
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
</style>

<header>
    <div class="header-wrapper">
        <div class="logo-container">
            <a href="/" id="logo-link">
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
    </div>
</header>