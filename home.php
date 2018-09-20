<?php get_header(); ?>
<?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            // Category 3 should correspond to posts displayed on home page
            if (!has_category(3))
              continue;
            get_template_part('content', 'home');
        }
    }
    else {
      get_template_part('content', 'none');
    }
?>
<?php get_footer(); ?>
