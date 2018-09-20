<article id="team_member-<?php the_ID(); ?>" class="team_member <?php post_class(); ?>">
  <figure>
    <?php if (get_the_post_thumbnail_url()) : ?>
      <img src="<?php echo get_the_post_thumbnail_url(); ?>'" height="150px" />
    <?php endif; ?>
  </figure>
  <section class="content">
    <h3><?php the_title(); ?></h3>
    <p><?php the_content(); ?></p>
  </section>
</article>
<hr class="wp-block-separator">
