<?php
/** Template Name: Homepage */
get_header(); 

$fields = get_fields();?>

<main class="main l-home" role="main">

    <h1 class="hide"><?= get_bloginfo('title') . ' - ' . get_bloginfo('description') ?></h1>

    <?php  if($fields['hero']) : ?>
        <section class="l-home-hero">
            <picture>
                <source media="(min-width: 1280px)" srcset="<?php echo $fields['hero']['desktop']; ?>">
                <img src="<?php echo $fields['hero']['mobile']['url']; ?>" loading="lazy" alt="<?= $fields['hero']['mobile']['alt'] ?>">
            </picture>
        </section>
    <?php endif; ?>


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

    <?php  if($fields['banner']) : ?>
        <?php echo $fields['banner']['mobile']['url']; ?>
        <section class="l-home-hero">
            <picture>
                <source media="(min-width: 1280px)" srcset="<?php echo $fields['banner']['desktop']; ?>">
                <img src="<?php echo $fields['banner']['mobile']['url']; ?>" loading="lazy" alt="<?= $fields['banner']['mobile']['alt'] ?>">
            </picture>
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
