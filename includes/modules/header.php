<?php
global $theme_uri;
?>

<header class="m-header">
    
    <section class="m-header__main">
        <div class="container">
            <button class="m-button m-button-header JS__toggle-menu" aria-label="Open menu">
                <span class="hamburger-inner"></span>
            </button>

            <a href="<?= home_url(); ?>" class="m-header__logo" title="Back to Homepage">
                <img src="<?= $theme_uri; ?>/assets/img/logo.png" width="143" height="58" loading="lazy" alt="Intibiome - Co-Developed With Gynaecologists Logo">
            </a>

            <button class="m-button m-button-header" aria-label="Open search">
                <img src="<?= $theme_uri ?>/assets/img/icons/search.svg" width="24" height="24" loading="lazy" alt="Ícone de Lupa">
            </button>
        </div>
    </section>

    <section class="m-header__menu JS__header-menu">
        <div class="container">
            <?php wp_nav_menu([
                'menu'              => 'header',
                'menu_class'        => 'm-header__menu__nav mobile',
                'container'       => 'nav'
            ]); ?>
            <?php wp_nav_menu([
                'menu'              => 'header_menu_desktop',
                'menu_class'        => 'm-header__menu__nav desktop',
                'container'       => 'nav',
                'walker' => new Custom_Submenu_Walker()
            ]); ?>
        </div>
    
    </section>
</header>