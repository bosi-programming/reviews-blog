<?php

get_header();
wp_enqueue_style('category');
wp_enqueue_script('category');
?>

<main class="container">

  <h1><?= single_cat_title('', false); ?></h1>
  <div class="posts-wrapper">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
        <?php get_template_part('./components/molecules/post-card'); ?>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</main>

<?php
get_footer();
?>
