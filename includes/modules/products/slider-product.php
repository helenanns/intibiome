<?php
$products = @$args['query'];

if ($products->have_posts()): ?>

<div class="swiper m-slider-product JS__products">
    <ul class="swiper-wrapper">
        <?php while ($products->have_posts()): $products->the_post(); ?>
            <li class="swiper-slide">
                <?php get_template_part('/includes/modules/products/card-product', 'product', []); ?>
            </li>
        <?php endwhile; ?> 
    </ul>
</div>

<?php endif; ?>
