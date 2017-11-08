</article>
</div>
</div>
</div>
<footer class="footer">
  <div class="wrapper">
    <div class="footer__partners">
      <a href="https://www.senat.gov.pl">
        <img src="<?php bloginfo('template_url'); ?>/images/godlo_z_podpisem2.jpg" alt="Godło senatu RP">
      </a>
      <a href="http://www.wspolnotapolska.org.pl/">
        <img src="<?php bloginfo('template_url'); ?>/images/wspolnota-polska-logo.jpg" alt="Logo Wspólnoty Polskiej">
      </a>
      <a href="www.polska-szkola.pl">
        <img src="<?php bloginfo('template_url'); ?>/images/logo-psk-small.png" alt="Logo Polskiej Szkoły">
      </a>
      <div class="footer__partners--text">
        <p>Szkoła dofinansowana od Stowarzyszenia „Wspólnota Polska” ze środków Kancelarii Senatu RP w ramach opieki nad Polonią i Polakami za granicą w 2016 r.
        </p>
      </div>
    </div>
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