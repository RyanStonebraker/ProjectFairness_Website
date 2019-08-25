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
<?php if (is_home()) : ?>
  <?php if (!get_theme_mod('pf_featured_section_1_hide') && !get_theme_mod('pf_featured_section_2_hide') && !get_theme_mod('pf_featured_section_3_hide')) : ?>
    <section class="droplet-svg">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 50" xml:space="preserve">
        <defs>
          <pattern id="paint-texture" patternUnits="userSpaceOnUse" width="50" height="50">
            <image xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/texture.png" width="50" height="50" />
          </pattern>
        </defs>
        <path stroke="url(#paint-texture)" class="arrow-path" d="M500,0c0,0-156.1,51.5-252.9,25C76.5-21.7,101,50,101,50"/>
        <path stroke="url(#paint-texture)" class="arrow-path" d="M501,0c0,0,154.7,51.5,250.8,25c169.1-46.7,144.8,25,144.8,25"/>
        <path stroke="url(#paint-texture)" class="arrow-path" d="M500,0c0,0,1,40,0,50"/>
      </svg>
    </section>
  <?php endif; ?>
  <ul class="featured">
    <?php if (!get_theme_mod('pf_featured_section_1_hide')) : ?>
      <li>
        <a href = "<?php echo get_theme_mod('pf_featured_section_1_link'); ?>">
          <div class="featured-img"><?php echo get_theme_mod('pf_featured_section_1_name'); ?></div>
        </a>
        <p><?php echo get_theme_mod('pf_featured_section_1_short_description'); ?></p>
      </li>
    <?php endif; ?>
    <?php if (!get_theme_mod('pf_featured_section_2_hide')) : ?>
      <li>
        <a href = "<?php echo get_theme_mod('pf_featured_section_2_link'); ?>">
          <div class="featured-img"><?php echo get_theme_mod('pf_featured_section_2_name'); ?></div>
        </a>
        <p><?php echo get_theme_mod('pf_featured_section_2_short_description'); ?></p>
      </li>
    <?php endif; ?>
    <?php if (!get_theme_mod('pf_featured_section_3_hide')) : ?>
      <li>
        <a href = "<?php echo get_theme_mod('pf_featured_section_3_link'); ?>">
          <div class="featured-img"><?php echo get_theme_mod('pf_featured_section_3_name'); ?></div>
        </a>
        <p><?php echo get_theme_mod('pf_featured_section_3_short_description'); ?></p>
      </li>
    <?php endif; ?>
  </ul>
<?php endif; ?>
<?php get_footer(); ?>
