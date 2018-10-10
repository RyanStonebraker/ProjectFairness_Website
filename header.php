<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <title>
            <?php echo get_bloginfo('name') . ' | ';
            if (is_front_page())
                echo get_bloginfo('description');
            else {
                $pagename = ucwords(get_query_var('pagename'));
                if (!$pagename)
                    $pagename = get_the_title();
                echo $pagename;
            }
            ?>
        </title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body>
      <header>
        <div class="nav-spacer"></div>
        <nav class="mobile-hide">
          <i class="fas fa-bars"></i>
          <?php
            $nav_locations = get_nav_menu_locations();
            $nav = $nav_locations['top-menu'];
            $top_nav = wp_get_nav_menu_items($nav);
            if ($top_nav) :
              foreach ($top_nav as $nav) : ?>
                  <a href="<?php echo $nav->url; ?>"><?php echo $nav->title; ?></a>
              <?php endforeach; ?>
            <?php endif; ?>

        </nav>
        <?php if (is_home()) : ?>
          <ul class="social-media">
            <li>
              <?php if (get_theme_mod('pf_social_media_section_facebook')) : ?>
                <a href="<?php echo get_theme_mod('pf_social_media_section_facebook'); ?>" target="_blank">
              <?php else: ?>
                <a href="#">
              <?php endif; ?>
                <div class="icons8-facebook"></div>
              </a>
            </li>
            <li>
              <?php if (get_theme_mod('pf_social_media_section_instagram')) : ?>
                <a href="<?php echo get_theme_mod('pf_social_media_section_instagram'); ?>" target="_blank">
              <?php else: ?>
                <a href="#">
              <?php endif; ?>
                <div class="icons8-instagram"></div>
              </a>
            </li>
            <li>
              <?php if (get_theme_mod('pf_social_media_section_linkedin')) : ?>
                <a href="<?php echo get_theme_mod('pf_social_media_section_linkedin'); ?>" target="_blank">
              <?php else: ?>
                <a href="#">
              <?php endif; ?>
                <div class="icons8-linkedin"></div>
              </a>
            </li>
            <li>
              <?php if (get_theme_mod('pf_social_media_section_twitter')) : ?>
                <a href="<?php echo get_theme_mod('pf_social_media_section_twitter'); ?>" target="_blank">
              <?php else: ?>
                <a href="#">
              <?php endif; ?>
                <div class="icons8-twitter"></div>
              </a>
            </li>
          </ul>
        <?php endif; ?>
        <section class="logo-container"><section class="logo"></section></section>
        <?php if (!is_home()) {
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              ?>
                <h1 class="page-header" <?php post_class(); ?>><?php the_title(); ?></h1>
              <?php
            }
          }
        } ?>
      </header>
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
      <main>
        <?php if (!is_home()) : ?>
          <section class="page-body"><p <?php post_class(); ?>><?php the_content(); ?></p></section>
        <?php endif; ?>
