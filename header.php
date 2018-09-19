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
        <nav>
          <a href="#">Home</a>
          <a href="#">About Us</a>
          <a href="#">Join Our Team</a>
          <a href="#">Scholarships</a>
          <a href="#">Mentorship Program</a>
          <a href="#">Events</a>
          <a href="#">Contact</a>
          <a href="#">Donate</a>
          <a href="#">Get Updates</a>
        </nav>
        <?php if (is_home()) : ?>
          <ul class="social-media">
            <li>
              <a href="#"><div class="icons8-facebook"></div></a>
            </li>
          </ul>
        <?php endif; ?>
        <section class="logo-container"><section class="logo"></section></section>
      </header>
      <?php if (is_home()) : ?>
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
        <ul class="featured">
          <li>
            <div class="featured-img"></div>
            <p>Our scholarships support select current and former foster youth while they pursue higher education. More information will follow this year.​</p>
          </li>
          <li>
            <div class="featured-img"></div>
            <p>Our scholarships support select current and former foster youth while they pursue higher education. More information will follow this year.​</p>
          </li>
          <li>
            <div class="featured-img"></div>
            <p>Our scholarships support select current and former foster youth while they pursue higher education. More information will follow this year.​</p>
          </li>
        </ul>
      <?php endif; ?>
      <main>
