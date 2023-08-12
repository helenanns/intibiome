<?php 
$bannerImages = @$args['images'];

if($bannerImages) : ?>

<section class="m-banner-full">
    <?php if($bannerImages['link']) : ?>
    <a href="<?= $bannerImages['link']['url'] ?>" target="<?= $bannerImages['link']['target'] ?>" title="<?= $bannerImages['link']['title'] ?>">
    <?php endif;?>

        <picture>
            <source media="(min-width: 1280px)" srcset="<?php echo $bannerImages['desktop']; ?>">
            <img src="<?php echo $bannerImages['mobile']['url']; ?>" loading="lazy" alt="<?= $bannerImages['mobile']['alt'] ?>">
        </picture>

    <?php if($bannerImages['link']) : ?>
    </a>
    <?php endif;?>
</section>

<?php endif; ?>