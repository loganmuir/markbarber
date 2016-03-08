<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?php bloginfo('name'); ?>">

    <meta property="og:title" content="<?php bloginfo('name'); ?> • <?php the_title();?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:url" content="http://www.quantium.com.au/">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta name="twitter:image:src" content="">
    <title><?php bloginfo('name'); ?> • Auckland, New Zealand • <?php bloginfo('description'); ?></title>

    <link href="<?php bloginfo('template_url')?>/css/bootstrap.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/featherlight.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/featherlight.gallery.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link href="<?php bloginfo('template_url')?>/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>
  <body>

        <header>
        <h1><a href="<?php echo home_url('/');?>"><img src="<?php bloginfo('template_url')?>/img/logo.svg" alt="Mark Barber Photographer"/></a></h1>
        
        <nav>
           <ul>
              <?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
          </ul>
        </nav>
    
        <div class="expand">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </div>
    </header>