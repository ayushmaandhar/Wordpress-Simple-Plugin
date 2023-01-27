<?php
/**
 * Template Name: Single Note
 */
get_header();

while ( have_posts() ) : the_post(); ?>

<div style="margin: 20px 40px;" class="note-content">
    <h1 style="padding-bottom: 20px"><?php the_title(); ?></h1>
    <div class="note-text">
        <?php the_content(); ?>
    </div>
</div>

<?php endwhile;

get_footer();
?>

