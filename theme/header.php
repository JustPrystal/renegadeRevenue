<!DOCTYPE html>
<html id="no" <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=0" />

  <?php include_once INCLUDES_DIR . 'google-tag-manager.php'; ?>
  <?php include_once INCLUDES_DIR . 'google-analytics.php'; ?>

  <!--FAVICON-->
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon.png" type="image/x-icon" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon.png"
    type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_stylesheet_directory_uri(); ?>/social/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon-16x16.png">
  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
  <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/social/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/social/safari-pinned-tab.svg"
    color="#000000">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
  <meta name="author" content="<?php bloginfo('name'); ?>" />
  <?php
    $header_scripts = get_field("header_scripts", "option");
    echo $header_scripts;
  ?>

</head>

<body class="<?php

$current_user = wp_get_current_user();
if (user_can($current_user, 'administrator')) {
  echo ' adminbar';
}
?>">


  <?php
  $header = get_field('header', 'option');
  ?>
  <div class="mode">
    <div class="frame">
      <div class="icon"></div>
    </div>
  </div>
  <header class="desktop-header">
    <div class="container">
      <a href="/" class="logo-wrap">
        <img src="<?php echo $header['logo']['url'] ?>" alt="logo" class="logo">
        <img src="<?php echo $header['dark_mode_logo']['url'] ?>" alt="logo" class="dark-mode-logo">
      </a>
      <div class="header-links" id="header-links">
        <?php foreach ($header['header-links'] as $link) { ?>
          <a href=<?php echo $link['link']['url']; ?> class="link"><?php echo $link['link']['title']; ?></a>
          <?php } ?>
          <div class="header-button">
            <a class="calendly-trigger" ><?php echo $header['book_a_call_button'] ?> </a>
          </div>
      </div>
      <div class="menu-wrap" id="menu-wrap">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>

  <div class="all">