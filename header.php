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
        <section class="logo"></section>
      </header>
      <main>
