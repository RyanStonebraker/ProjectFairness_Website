<?php get_header(); ?>
<?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            if (empty(get_the_category()))
              get_template_part('content', 'page');
        }
    }
    else {
      get_template_part('content', 'none');
    }
?>
<?php get_footer(); ?>
