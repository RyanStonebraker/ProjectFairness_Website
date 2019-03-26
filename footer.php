</main>
<footer>
  <p>&copy; 2018 Project Fairness, Inc.</p>
  <ul class="social-media">
    <?php if (get_theme_mod('pf_social_media_section_facebook')) : ?>
      <li>
        <a href="<?php echo get_theme_mod('pf_social_media_section_facebook'); ?>" target="_blank">
          <div class="icons8-facebook"></div>
        </a>
      </li>
    <?php endif; ?>
    <?php if (get_theme_mod('pf_social_media_section_instagram')) : ?>
      <li>
        <a href="<?php echo get_theme_mod('pf_social_media_section_instagram'); ?>" target="_blank">
          <div class="icons8-instagram"></div>
        </a>
      </li>
    <?php endif; ?>
    <?php if (get_theme_mod('pf_social_media_section_linkedin')) : ?>
      <li>
        <a href="<?php echo get_theme_mod('pf_social_media_section_linkedin'); ?>" target="_blank">
          <div class="icons8-linkedin"></div>
        </a>
      </li>
    <?php endif; ?>
    <?php if (get_theme_mod('pf_social_media_section_twitter')) : ?>
      <li>
        <a href="<?php echo get_theme_mod('pf_social_media_section_twitter'); ?>" target="_blank">
          <div class="icons8-twitter"></div>
        </a>
      </li>
    <?php endif; ?>
  </ul>
</footer>
<?php wp_footer(); ?>
</body>
</html>
