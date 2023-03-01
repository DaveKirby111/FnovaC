<?php get_header(); ?>

<main>
    <div class="content">

    <h1><?php the_title(); ?></h1>

    <?php 

    the_post_thumbnail();

    ?>

    <?php

    if( have_posts() ) {
        while( have_posts() ) {
            the_post();
            the_content();
        }
    }

    ?>
    
    </div>
</main>

<?php get_footer(); ?>