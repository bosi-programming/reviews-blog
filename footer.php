<footer class=" footer">
  <div class="container">
    <?php
    $locale = get_locale();

    if ($locale == 'en_US') {
      echo '<h1 class="footer-title">Do you want to know more about me?</h1>';
    } else {
      echo '<h1 class="footer-title">Quer saber mais sobre mim?</h1>';
    }
    ?>
    <?php get_template_part('components/molecules/socialSection'); ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
