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
            $nav = wp_get_nav_menu_object($nav_locations["top-menu"]);
            // $nav = $nav_locations['top-menu'];
            $top_nav = wp_get_nav_menu_items($nav->term_id, array('order' => 'DESC'));
            if ($top_nav) :
              $count = 0;
              $submenu = false;
              foreach ($top_nav as $nav) :
                if (!$nav->menu_item_parent):
                  $parent_id = $nav->ID;?>
                  <div class="menu">
                    <a href="<?php echo $nav->url; ?>"><?php echo $nav->title; ?></a>
                <?php endif; ?>
                <?php if ($parent_id == $nav->menu_item_parent): ?>
                  <?php if (!$submenu): $submenu = true; ?>
                    <div class="submenu">
                  <?php endif; ?>
                      <a href="<?php echo $nav->url; ?>"><?php echo $nav->title; ?></a>
                  <?php if ($top_nav[$count + 1]->menu_item_parent != $parent_id && $submenu): ?>
                    </div>
                  <?php $submenu = false; endif; ?>
                <?php endif; ?>
                  <?php if ($top_nav[$count + 1]->menu_item_parent != $parent_id): ?>
                    </div>
                  <?php $submenu = false; endif; ?>
              <?php $count++; endforeach; ?>
            <?php endif; ?>

        </nav>
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
      <main <?php if (is_home()) : ?> class="home" <?php endif; ?>>
