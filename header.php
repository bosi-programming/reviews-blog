<!DOCTYPE html>
<html lang="en">

<head <?php do_action('add_head_attributes'); ?>>
  <?php $home = get_template_directory_uri(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php bloginfo('name'); ?>
  </title>

  <link rel="apple-touch-icon" sizes="57x57" href="<?= $home ?>/assets/images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= $home ?>/assets/images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= $home ?>/assets/images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= $home ?>/assets/images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= $home ?>/assets/images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= $home ?>/assets/images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= $home ?>/assets/images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= $home ?>/assets/images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $home ?>/assets/images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= $home ?>/assets/images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $home ?>/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= $home ?>/assets/images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $home ?>/assets/images/favicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet" />

  <?php wp_head(); ?>
</head>
<header id="header" class="header">
  <a class="logo" href="<?= get_site_url(); ?>">
    <h3 class="logo-content">
      <?php bloginfo('name'); ?>
    </h3>
    <p class="logo-content">
      <?php bloginfo('description'); ?>
    </p>
  </a>
  <div id="menu_toggle">
    <input id="menu_toggle__input" type="checkbox" class="desktop-hide tablet-hide">

    <span></span>
    <span></span>
    <span></span>

    <nav class="header-nav top-menu">
      <ul class="header-nav-list">
        <?php $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['top-menu']) ?>
        <? if($menu_items): ?>
        <?php foreach ($menu_items as $item) : ?>

          <li class="header-nav-item menu-item">
            <a class="header-nav-item" href="<?= $item->url; ?>">
              <h3 class="header-nav-item"><?= $item->title; ?></h3>
            </a>
          </li>
        <?php endforeach; ?>
        <? endif; ?>
      </ul>
    </nav>
  </div>
</header>

<body>
