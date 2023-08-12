<?php
$news = @$args['query'];

if ($news->have_posts()): ?>

<div class="swiper m-slider-news JS__news">
    <ul class="swiper-wrapper">
        <?php while ($news->have_posts()): $news->the_post(); ?>
            <li class="swiper-slide">
                <?php get_template_part('/includes/modules/news/card-news', 'new', []); ?>
            </li>
        <?php endwhile; ?> 
    </ul>
</div>

<?php endif; ?>
