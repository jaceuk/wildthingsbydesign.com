<?php

/**
 * Template Name: Home
 */

get_header();
?>

<main>
  <?php
  global $LAUNCH_EVENT;
  if ($LAUNCH_EVENT) {
    get_template_part('components/hero-launch-event');
  } else {
    get_template_part('components/hero');
  }

  get_template_part('components/benefits-slim');
  get_template_part('components/best-sellers');
  get_template_part('components/featured-collections');
  get_template_part('components/personalised-gifts');
  ?>
</main>

<?php
get_footer();
