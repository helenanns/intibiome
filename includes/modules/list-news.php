<?php
$news = @$args['query'];

if ($news->have_posts()): ?>

<div class="swiper m-list-news JS__news">
    <ul class="swiper-wrapper">

        <?php while ($news->have_posts()):
            $news->the_post();
        ?>

            <li class="swiper-slide">
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
            </li>

        <?php endwhile; ?> 

    </ul>
</div>

<?php endif; ?>
