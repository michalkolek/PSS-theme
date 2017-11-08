<!DOCTYPE html>
<html lang="pl-PL">
<head>

    <meta charset="UTF-8">
    <title><?php bloginfo('name');?> <?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 
    <header class="site-header site-header--scroll-up">
      <div class="wrapper">
        <div class="burrow">
         <a class="site-header__logo--mobile" href="<?php echo home_url(); ?>">PSS</a>
          <div class="site-header__logo">
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <img class="small-image-flag" src="<?php bloginfo('template_url'); ?>/images/polska-flaga2.png" alt="Polska flaga logo">
           </div>

               <div class="site-header__menu-icon">
                  <div class="site-header__menu-icon__middle"></div>
            </div>
        
        <div class="site-header__menu-content">
            <nav class="primary-nav">
              <div class="site-header__menu-content--inner">
             
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
     <?php if ( is_home() ) { ?> 
     <div class="large-hero">
     <?php } 
      else { ?>
        <div class="large-hero skip-me">
       <?php } ?>

        <picture>
          <source srcset="<?php bloginfo('template_url'); ?>/images/4.jpg 848w" media="(min-width: 768px)">
          <img srcset="<?php bloginfo('template_url'); ?>/images/large-hero-small-2.jpg" alt="Ołówki">
        </picture>
        <div class="large-hero__text-content">
           <h1><?php echo get_theme_mod('pss-large-hero-callout-setting')?></h1>
           <h3><?php echo get_theme_mod('pss-large-hero-callout-h3-setting')?></h3>
         
              

         </div>
    </div>
  <div class="main-section wrapper">
  <div class="row">
 

   