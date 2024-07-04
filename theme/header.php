<!DOCTYPE html>
<html id="no" <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=0" />

    <?php include_once INCLUDES_DIR . 'google-tag-manager.php'; ?>
    <?php include_once INCLUDES_DIR . 'google-analytics.php'; ?>

  	<!--FAVICON-->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/social/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/social/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/social/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    
    <?php wp_head();?>    
    <meta name="author" content="<?php bloginfo('name'); ?>" />
    
  </head>
  <body class="<?php 
  
  $fadeMenu = get_field("menu_fade", $post->ID);
  if ($fadeMenu) {
    echo ' fadeMenu';
  }

  $current_user = wp_get_current_user();
    if (user_can( $current_user, 'administrator' )) {
        echo ' adminbar';
    }
  ?>">


  <?php 
    $header = get_field('header', 'option');
  ?>
<div class="mode dark">
    <div class="frame">
        <div class="icon"></div>
    </div>
</div>
  <header class="desktop-header">
    <div class="container">
      <a href="/home" class="logo-wrap">
        <img src=<?php echo $header['logo']['url'] ?> alt="logo" class="logo">
      </a>
      <div class="header-links" id="header-links">
        <?php foreach($header['header-links'] as $link){ ?>
          <a href=<?php echo $link['link']['url']; ?> class="link"><?php echo $link['link']['title']; ?></a>
        <?php } ?>
      </div>
      <div class="menu-wrap" id="menu-wrap" onClick="toggleClasses()">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>
  <script>
    $(".mode").click(function(){
      $(this).toggleClass("dark");
    })
    $("body").click(function(){
      $(this).toggleClass("no-scroll");
    })
      const links = document.getElementById('header-links');
      const menu = document.getElementById('menu-wrap');
    function toggleClasses() {
      links.classList.toggle('active');
      menu.classList.toggle('cross');
    }
  </script>
  <div class="all"> 
