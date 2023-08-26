<?php

get_header();
?>

<main class="container">

  <!-- Hero -->
  <?php get_template_part('./components/atoms/message', null, array(
    'title' => "Felipe Azevedo Bosi",
    'text' => "Senior Frontend | TypeScript | React Engineer",
  )); ?>

  <!-- Social -->
  <?php get_template_part('components/molecules/socialSection'); ?>

  <!-- Main Open Source Projects -->
  <?php get_template_part('components/molecules/listWithLinks', null, array(
    'title' => "Main open-source projects",
    'description' => "Here are my main open-source projects. You can see the rest of them on my GitHub account.",
    'items' => array(
      array(
        'title' => "StartPage",
        'link' => "https://github.com/bosi-programming/startpage",
        'description' => "A StartPage made with svelte",
      ),
      array(
        'title' => "Simply Editor",
        'link' => "https://github.com/bosi-programming/simply-editor",
        'description' => "A markup editor made with Electron and Svelte",
      ),
      array(
        'title' => "useHorizontalScroll",
        'link' => "https://github.com/bosi-programming/useHorizontalScroll",
        'description' => "A React hook that adds the hability to scroll horizontally by grabbing the element used as a ref.",
      ),
      array(
        'title' => "React-query-crud",
        'link' => "https://github.com/bosi-programming/react-query-crud",
        'description' => "A library that automates the creation of CRUD methods on react-query",
      ),
    )
  )); ?>

  <!-- Main Private Projects -->
  <?php get_template_part('components/molecules/listWithLinks', null, array(
    'title' => "Work experiences",
    'description' => "Here you can see some of the private projects that I made or participate on the main developer team.",
    'items' => array(
      array(
        'title' => "Luma Health",
        'link' => "https://www.lumahealth.io/",
        'description' => "Main developer of the blog and part of the frontend team responsible from the company's app. The blog is made in Wordpress and the app is in React",
      ),
      array(
        'title' => "UVV",
        'link' => "https://www.uvv.br/",
        'description' => "Part of the front-end team responsible to maintain the site running",
      ),
      array(
        'title' => "Phidelis",
        'link' => "https://phidelis.com.br/",
        'description' => "Part of the front-end/design team. Responsable for the implementation of Vue.js and Nuxt.js on the product.",
      ),
    ),
  )); ?>

<!-- Habilities part -->
  <article class="container">
    <div class="lists">
      <h1 class="section-title">Programming Abilities</h1>
      <div class="flex">
        <?php get_template_part('components/molecules/starsList', null, array(
          'title' => "Programming Languages",
          'stars' => array(
            array(
              "title" => "TypeScript",
              "stars" => 5
            ),
            array(
              "title" => "JavaScript",
              "stars" => 5
            ),
            array(
              "title" => "PHP",
              "stars" => 4
            ),
            array(
              "title" => "Go",
              "stars" => 3
            ),
          ),
        )); ?>
        <?php get_template_part('components/molecules/starsList', null, array(
          'title' => "Frameworks",
          'stars' => array(
            array(
              "title" => "React",
              "stars" => 5
            ),
            array(
              "title" => "Svelte",
              "stars" => 4
            ),
            array(
              "title" => "Vue",
              "stars" => 3
            ),
            array(
              "title" => "Electron",
              "stars" => 3
            ),
          ),
        )); ?>
      </div>
    </div>
  </article>
</main>

<?php
get_footer();
?>
