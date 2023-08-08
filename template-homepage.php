<?php
/** Template Name: Homepage */
get_header();
?>

<main class="main l-home" role="main">

    <h1 class="hide"><?= get_bloginfo('title') . ' - ' . get_bloginfo('description'); ?></h1>


    <section class="l-home__content">
        <div class="container">
            <?php the_content();?>
        </div>
    </section>


</main>

<?php get_footer();?>

