<?php
/** Template Name: Homepage */
get_header(); 

$fields = get_fields();?>

<main class="main l-home" role="main">

    <?= '<h1 class="hide">' . get_bloginfo('title') . ' - ' . get_bloginfo('description') . '</h1>' ?>

    <?php 
    /*
        Banner Hero
    */
    if($fields['hero']) : 
       
        get_template_part('/includes/modules/banners/banner-full-width', 'hero', [
            'images' => $fields['hero']
        ]);

    endif; 
    ?>


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
    /*
        Banner
    */
    if($fields['banner']) : 
       
        get_template_part('/includes/modules/banners/banner-full-width', 'banner', [
            'images' => $fields['banner']
        ]);

    endif; 
    ?>


    <?php
    $news = simple_query('post', 3);
    if ($news): ?>
        <section class="section l-home__news">
            <div class="container">
                <h2>keep up to date with our discoveries</h2>
                <?php get_template_part('/includes/modules/list-news', 'news', [
                    'query' => $news,
                ]); ?>

                <a href="<?= get_post_type_archive_link('post');?>" class="m-button m-button-primary mx-auto">see more</a>
            </div>
        </section>
    <?php endif; ?>


</main>

<?php get_footer(); ?>
