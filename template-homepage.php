<?php
/** Template Name: Homepage */
get_header(); ?>

<main class="main l-home" role="main">

    <h1 class="hide"><?= get_bloginfo('title') . ' - ' . get_bloginfo('description') ?></h1>

    <section class="l-home__content">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>


    <?php
    $products = simple_query('produtos', 3);
    if ($products): ?>
    <section class="section l-home__products">
        <div class="container">
            <h2>Our products</h2>
            <?php get_template_part('/includes/modules/list-product', 'products', [
                'query' => $products,
            ]); ?>
        </div>
    </section>
    <?php endif; ?>

    <?php
    $news = simple_query('post', 3);
    if ($news): ?>
    <section class="section l-home__news">
        <div class="container">
            <h2>keep up to date with our discoveries</h2>
            <?php get_template_part('/includes/modules/list-news', 'news', [
                'query' => $news,
            ]); ?>

            <a href="" class="m-button m-button-primary">see more</a>
        </div>
    </section>
    <?php endif; ?>


</main>

<?php get_footer(); ?>
