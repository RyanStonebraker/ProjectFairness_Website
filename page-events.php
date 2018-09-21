<?php get_header(); ?>
<?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('content', 'page');
        }
    }
    else {
      get_template_part('content', 'none');
    }
?>
<?php get_template_part("widget", "events"); ?>
<?php get_footer(); ?>
