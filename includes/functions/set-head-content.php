<?php

add_action('wp_head', 'head_content');
function head_content()
{
	global $theme_uri;
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Intibiome <?php wp_title('-', true, 'right'); ?>
    </title>

    <?php
    if (is_single()) {
        $description = get_the_excerpt();
    } else {
        $description = get_bloginfo('description');
    }
    ?>

    <meta property="og:description" content="<?= $description; ?>" />
    <meta name="description" content="<?= $description; ?>" />

    <link rel='canonical' href='<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>' />

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#389CD6">

<?php

}

?>