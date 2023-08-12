<?php $terms = get_the_terms(get_the_id(), 'produtos_categoria'); ?>

<article class="m-card-product">
    <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()) :  ?>
            <picture class="m-card-product__image">
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>" width="356" height="351px" loading="lazy">
            </picture>
        <?php endif; ?>

        <div class="m-card-product__content">
            <?php the_title(); ?>
        </div>

        <?php if ($terms[0]) : ?>
            <div class="m-card-product__category" style="background-color: <?= get_field('cor', $terms[0]->taxonomy . '_' . $terms[0]->term_id); ?>;">
                <?= $terms[0]->name; ?>
            </div>
        <?php endif; ?>
    </a>
</article>