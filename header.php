<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="style.css">
     
    <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <header class="site-header">
      <div class="wrapper">
        <div class="row">
          <div class="four columns site-header__logo">
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <img class="small-image-flag" src="<?php bloginfo('template_url'); ?>/images/polska-flaga2.png" alt="">
         </div>

               <div class="site-header__menu-icon">
                  <div class="site-header__menu-icon__middle"></div>
            </div>
        
        <div class="eight columns site-header__menu-content">
            <nav class="primary-nav">
              <div class="site-header__menu-content">
             
                  <?php 

                  $args = array (
                    'theme_location' => 'primary'

                  ); 

                  ?>

                  <?php wp_nav_menu( $args ); ?>
                
                </div>
            </nav>
        </div>
     <div class="contact-facebook"><a href="https://pl-pl.facebook.com/schoolpl/"><i class="facebook-contact-icon fa fa-2x fa-facebook-official" aria-hidden="true"></i></a>
        </div>
      </div>
    </header>
     <div class="large-hero">

        <picture>
          <source srcset="<?php bloginfo('template_url'); ?>/images/4.jpg 848w" media="(min-width: 768px)">
            <img srcset="<?php bloginfo('template_url'); ?>/images/large-hero-small.jpg" alt="">
        </picture>
        <div class="large-hero__text-content">
           <h1><?php echo get_theme_mod('pss-large-hero-callout-setting')?></h1>
           <h3><?php echo get_theme_mod('pss-large-hero-callout-h3-setting')?></h3>
         
              

         </div>
    </div>
  <div class="main-section wrapper">
  <div class="row">
 

   