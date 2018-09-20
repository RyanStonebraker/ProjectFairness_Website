<h1 class="donation-title"><?php echo get_theme_mod('pf_donation_tracker_section_title'); ?></h1>
<section class="donation-tracker">
  <?php if (get_theme_mod('pf_donation_tracker_section_current_donations')) : ?>
    <?php
      $percent_to_goal = get_theme_mod('pf_donation_tracker_section_current_donations') / get_theme_mod('pf_donation_tracker_section_goal');
      if ($percent_to_goal > 1)
        $percent_to_goal = 1;
      else if ($percent_to_goal < 0)
        $percent_to_goal = 0;

    ?>
    <div class="donation-bar" style="width:<?php echo $percent_to_goal * 100; ?>%;"></div>
  <?php else : ?>
    <div class="donation-bar" style="width:500px;"></div>
  <?php endif?>
  <section class="labels">
    <h1 class="current">$<?php echo get_theme_mod('pf_donation_tracker_section_current_donations'); ?></h1>
    <h1 class="goal">$<?php echo get_theme_mod('pf_donation_tracker_section_goal'); ?></h1>
  </section>
</section>
