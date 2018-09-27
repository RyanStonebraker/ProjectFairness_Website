<section class="donation-tracker-cell">
  <?php if (get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_picture")) : ?>
    <img src="<?php echo get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_picture"); ?>">
  <?php else : ?>
    <img src="<?php echo get_template_directory_uri() . '/img/blank-person-placeholder.png'; ?>">
  <?php endif; ?>
  <section class="tracker">
    <section class="runner-info">
      <h1 class="donation-title"><?php echo get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_name"); ?></h1>
      <p><?php echo get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_runner_statement"); ?></p>
    </section>
    <section class="donation-tracker">
      <?php if (get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_goal")) : ?>
        <?php
          $percent_to_goal = get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_current_donations") / get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_goal");
          if ($percent_to_goal > 1)
            $percent_to_goal = 1;
          else if ($percent_to_goal < 0)
            $percent_to_goal = 0;

        ?>
        <div class="donation-bar" id="<?php echo $runnerShortName; ?>" style="width:<?php echo $percent_to_goal * 100; ?>%;"></div>
      <?php else : ?>
        <div class="donation-bar" style="width:50%;"></div>
      <?php endif?>
      <section class="labels">
        <h1 class="current">$<?php echo get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_current_donations"); ?></h1>
        <h1 class="goal">$<?php echo get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_goal"); ?></h1>
      </section>
    </section>
    <section class="donate-for-team">
      <?php if (get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_donation-button-shortcode")) : ?>
        <?php echo do_shortcode(get_theme_mod("pf_donation_tracker_section_{$runnerShortName}_donation-button-shortcode")); ?>
      <?php endif; ?>
    </section>
  </section>
</section>
