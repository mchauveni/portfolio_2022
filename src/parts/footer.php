<style>
    footer {
        background-color: var(--bg-secondary);
        padding: 3rem 0 5rem 0;
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
        gap: 8rem;
    }

    footer h3 {
        margin-bottom: 1.5rem;
    }

    footer ul {
        list-style-type: none;
    }

    footer li {
        margin: 0.5rem 0;
    }

    footer a {
        text-decoration: none;
    }

    @media screen and (max-width: 576px) {
        footer * {
            text-align: center;
        }
    }
</style>

<footer>
    <div class="footer-links">
        <h3><?php echo $texts->index_footer_links[0]->title; ?></h3>
        <ul>
            <li><a href="<?php echo APP_ROOT_URL_COMPLETE ?>/websites"><?php echo $texts->index_footer_links[0]->content[0]; ?></a></li>
            <li><a href="<?php echo APP_ROOT_URL_COMPLETE ?>/illustrations"><?php echo $texts->index_footer_links[0]->content[1]; ?></a></li>
        </ul>
    </div>
    <div class="footer-socials">
        <h3><?php echo $texts->index_footer_links[1]->title; ?></h3>
        <ul>
            <li><a href="https://github.com/Kaosbeing"><?php echo $texts->index_footer_links[1]->content[0]; ?></a></li>
            <li><a href="https://www.linkedin.com/in/math%C3%A9o-chaumet-venier-1ab02b257/"><?php echo $texts->index_footer_links[1]->content[1]; ?></a></li>
            <li><a href="https://twitter.com/ChaosLeChaos"><?php echo $texts->index_footer_links[1]->content[2]; ?></a></li>
            <li><a href="https://www.op.gg/summoners/euw/Chaosbeing"><?php echo $texts->index_footer_links[1]->content[3]; ?></a></li>
        </ul>
    </div>
    <div class="footer-legal">
        <h3><?php echo $texts->index_footer_links[2]->title; ?></h3>
        <ul>
            <li><a href="<?php echo APP_ROOT_URL_COMPLETE ?>/tos"><?php echo $texts->index_footer_links[2]->content[0]; ?></a></li>
            <li><a href="<?php echo APP_ROOT_URL_COMPLETE ?>/legal_notice"><?php echo $texts->index_footer_links[2]->content[1]; ?></a></li>
        </ul>
    </div>
</footer>