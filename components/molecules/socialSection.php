<?php wp_enqueue_style('socialSection'); ?>

<div class="flex social">
  <?php get_template_part('components/atoms/socialIcon', null, array(
    'icon' => 'github',
    'link' => 'https://github.com/bosi-programming',
  ));
  get_template_part('components/atoms/socialIcon', null, array(
    'icon' => 'linkedin',
    'link' => 'https://www.linkedin.com/in/felipebosi/',
  ));
  get_template_part('components/atoms/socialIcon', null, array(
    'icon' => 'instagram',
    'link' => 'https://www.instagram.com/bosi.programming/',
  ));
  get_template_part('components/atoms/socialIcon', null, array(
    'icon' => 'gmail',
    'link' => 'mailto:contato@felipebosi.com',
  )); ?>
</div>
