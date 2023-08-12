<article class="m-card-news">
    <a href="<?php the_permalink(); ?>">

        <?php if(has_post_thumbnail()) :  ?>
            <picture class="m-card-news__image">
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>" width="357" height="232px" loading="lazy">
            </picture>
        <?php endif; ?>


        <div class="m-card-news__content">
            <?php the_title(); ?>
        </div>
    </a>
</article>