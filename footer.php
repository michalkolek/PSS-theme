</article>
</div>
</div>
</div>
<footer class="footer">
  <div class="wrapper">

    <div class="footer__partners u-cf">
    <div class="footer__partners__logos">

      <?php if (get_theme_mod ( 'pss-partners-logos-link-1-setting' ) && get_theme_mod( 'pss-partners-logos-image-1-setting' ) ) { ?>
       <a href="<?php echo get_theme_mod('pss-partners-logos-link-1-setting');?>">
         <img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-partners-logos-image-1-setting')); ?>">
       </a> 
       <?php }

       if (get_theme_mod ( 'pss-partners-logos-link-2-setting' ) && get_theme_mod( 'pss-partners-logos-image-2-setting' ) ) { ?>
       <a href="<?php echo get_theme_mod('pss-partners-logos-link-2-setting');?>">
         <img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-partners-logos-image-2-setting')); ?>">
       </a> 
       <?php }

      if (get_theme_mod ( 'pss-partners-logos-link-3-setting' ) && get_theme_mod( 'pss-partners-logos-image-3-setting' ) ) { ?>
       <a href="<?php echo get_theme_mod('pss-partners-logos-link-3-setting');?>">
         <img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-partners-logos-image-3-setting')); ?>">
       </a> 
       <?php }

      if (get_theme_mod ( 'pss-partners-logos-link-4-setting' ) && get_theme_mod( 'pss-partners-logos-image-4-setting' ) ) { ?>
       <a href="<?php echo get_theme_mod('pss-partners-logos-link-4-setting');?>">
         <img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-partners-logos-image-4-setting')); ?>">
       </a> 
       <?php } 

        if (get_theme_mod ( 'pss-partners-logos-link-5-setting' ) && get_theme_mod( 'pss-partners-logos-image-5-setting' ) ) { ?>
       <a href="<?php echo get_theme_mod('pss-partners-logos-link-5-setting');?>">
         <img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-partners-logos-image-5-setting')); ?>">
       </a> 
       <?php }

     if (get_theme_mod ( 'pss-partners-logos-link-6-setting' ) && get_theme_mod( 'pss-partners-logos-image-6-setting' ) ) { ?>
       <a href="<?php echo get_theme_mod('pss-partners-logos-link-6-setting');?>">
         <img src="<?php echo wp_get_attachment_url(get_theme_mod('pss-partners-logos-image-6-setting')); ?>">
       </a> 
       <?php } ?>

      </div>
      <?php
      if (get_theme_mod ( 'pss-partners-logos-text-setting')) { ?>
            <div class="footer__partners--text">
        <p><?php echo get_theme_mod( 'pss-partners-logos-text-setting' ); ?>
        </p>
      </div>
      <?php } ?>
    </div>


  <div class="footer__list">
    <?php   
    $args = array (
      'theme_location' => 'footer'
      ); 
      ?>
      <?php wp_nav_menu($args); ?>
  </div>
  <div class="footer__copyright row">
    <div class="twelve columns footer__copyright--paragraph">
      <p class="center">Copyright &copy; <?php echo date('Y'); ?> PSS. All rights reserved
      </p>
      <p class="right">Proudly donated by Michał Kolek 
       <a href="http://www.WebServiceDev.co.uk" alt="link do www.webservicedev.co.uk">www.WebServiceDev.co.uk
       </a>
      </p>
    </div>
  </div>
    </div>
</footer>
  <div class="modal">
    <div class="modal__inner">
      <div class="row wrapper">
        <div class="four columns">
          <?php the_field('lewa_kolumna', $post_id=17); ?>
        </div>
        <div class="four columns">
          <?php the_field('srodkowa_kolumna', $post_id=17); ?>
        </div>
        <div class="four columns">
          <?php the_field('prawa_kolumna', $post_id=17); ?>
        </div>
      </div>
    </div>
    <div class="modal__close">X
    </div>
  </div>
 
  <?php wp_footer(); ?>
 </body>
</html>