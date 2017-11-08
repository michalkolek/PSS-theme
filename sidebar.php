<div class="three columns">
  <aside class="aside">
    <div class="aside__urgent-news">
      <h5>
        <?php echo esc_html( get_the_title($post = 105) ); ?>
      </h5>
      <h6>
        <?php echo apply_filters('the_content', get_post_field('post_content', $post_id=105));?>
      </h6>                     
    </div>

    <?php 
    if (get_theme_mod ( 'pss-ads-sidebar-1-link-setting' ) && get_theme_mod( 'pss-ads-sidebar-1-image-setting' ) )  { ?>
      <div class="aside__advert">
        <p class="advert--italic advert--sidebar--checkbox">--- Reklama ---</p>
         <p>
            <a href="<?php echo get_theme_mod('pss-ads-sidebar-1-link-setting');?>">
               <img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-ads-sidebar-1-image-setting')); ?>">
            </a>
         </p>
        <p class="advert--italic advert--sidebar--checkbox">--- Reklama ---</p>
      </div>
<?php } 
      elseif (get_theme_mod ( 'pss-ads-sidebar-1-link-text-setting' )) { ?>
        <div class="aside__advert">
          <p>
            <a href="<?php echo get_permalink (23);?>">
              <?php echo get_theme_mod('pss-ads-sidebar-1-link-text-setting'); ?>
            </a>
          </p>
        </div>
<?php }
      else {
          } ?>


  <div class="aside__column-nav">
    <?php 
      $args = array (
        'theme_location' => 'sidebar',
        'after' => '<hr class="sidebar-hr">'
      ); 
    ?>
    <?php wp_nav_menu( $args ); ?>
  </div>    

<?php if (get_theme_mod ( 'pss-ads-sidebar-2-link-setting' ) && get_theme_mod( 'pss-ads-sidebar-2-image-setting' ) )  { ?>
      <div class="aside__advert">
        <p class="advert--italic advert--sidebar--checkbox">--- Reklama ---</p>
         <p>
            <a href="<?php echo get_theme_mod('pss-ads-sidebar-2-link-setting');?>">
               <img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-ads-sidebar-2-image-setting')); ?>">
            </a>
         </p>
        <p class="advert--italic advert--sidebar--checkbox">--- Reklama ---</p>
      </div>
<?php } 
      elseif (get_theme_mod ( 'pss-ads-sidebar-2-link-text-setting' )) { ?>
        <div class="aside__advert">
          <p>
            <a href="<?php echo get_permalink (23);?>">
              <?php echo get_theme_mod('pss-ads-sidebar-2-link-text-setting'); ?>
            </a>
          </p>
        </div>
<?php }
      else {
          } ?>


  </aside>
</div>
<div class="nine columns">
  <article class="main-content">