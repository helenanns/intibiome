<?php
global $theme_uri;
?>

<footer class="m-footer">
    
    <div class="container">

        <?php wp_nav_menu([
            'menu'              => 'footer',
            'menu_class'        => 'm-footer-menu',
            'container'       => 'nav'
        ]); ?>


        <div class="m-footer__logos">
            <a href="" target="_blank">
                <img src="<?= $theme_uri ?>/assets/img/icons/instagram.svg" width="42" height="42" loading="lazy" alt="Instagram Icon">
            </a>

            <img src="<?= $theme_uri; ?>/assets/img/u-labs.png" width="116" height="29" loading="lazy" alt="U Labs Logo">
        </div>

    </div>

</footer>