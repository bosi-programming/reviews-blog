<?php
wp_enqueue_style('post-card');
?>
<article class="swiper-slide nes-container is-rounded post-card slide">
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <?= get_the_post_thumbnail() ?>
    <h3 class="card-title"><?= the_title() ?></h3>
    <p class="card-text"><?= get_the_excerpt(); ?></p>
  </a>
</article>
